<?php

namespace App\Http\Controllers;

use App\Model\Slider;
use File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:sliders,title',
            'sub_title' =>  'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $slider = new Slider;
        $slider->title = $request->get('title');
        $slider->sub_title = $request->get('sub_title');

        if($request->has('image')) {
            $image = $request->file('image');
            $image_name = time() . '_' . rand(100, 999) . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $image_name);
            $slider->image = $image_name;
        }
        if($slider->save()) {
            return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'title' => 'required|unique:sliders,title,'.$slider->id,
            'sub_title' =>  'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $slider->title = $request->get('title');
        $slider->sub_title = $request->get('sub_title');

        if($request->has('image')) {

            if($slider->image) {
                $upload_path = 'uploads/images/';
                File::delete($upload_path . $slider->image);
            }

            $image = $request->file('image');
            $image_name = time() . '_' . rand(100, 999) . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $image_name);
            $slider->image = $image_name;
        }
        if($slider->save()) {
            return redirect()->back()->with('success', 'Slider updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if($slider->image) {
            $upload_path = 'uploads/images/';
            File::delete($upload_path . $slider->image);
        }
        if($slider->delete()) {
            return redirect()->back()->with('success', 'Slider deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.');
        }
    }
}
