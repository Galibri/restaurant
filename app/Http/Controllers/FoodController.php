<?php

namespace App\Http\Controllers;

use File;
use App\Model\Food;
use App\Model\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('title', 'asc')->get();
        return view('admin.food.create', compact('categories'));
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
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif'
        ]);

        $food = new Food;
        $food->name = $request->get('name');
        $food->category_id = $request->get('category_id');
        $food->description = $request->get('description');
        $food->price = $request->get('price');
        $food->status = 1;

        if($request->has('image')) {
            $image = $request->file('image');
            $image_name = time() . '_' . rand(100, 999) . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $image_name);
            $food->image = $image_name;
        }
        if($food->save()) {
            return redirect()->route('admin.food.index')->with('success', 'Food Item created successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('admin.food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $categories = Category::orderBy('title', 'asc')->get();
        return view('admin.food.edit', compact('food', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif'
        ]);

        $food->name = $request->get('name');
        $food->category_id = $request->get('category_id');
        $food->description = $request->get('description');
        $food->price = $request->get('price');
        $food->status = $request->get('status');

        if($request->has('image')) {
            if($food->image) {
                $upload_path = 'uploads/images/';
                File::delete($upload_path . $food->image);
            }
            $image = $request->file('image');
            $image_name = time() . '_' . rand(100, 999) . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $image_name);
            $food->image = $image_name;
        }
        if($food->save()) {
            return redirect()->route('admin.food.index')->with('success', 'Food Item updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        if($food->image) {
            $upload_path = 'uploads/images/';
            File::delete($upload_path . $food->image);
        }
        if($food->delete()) {
            return redirect()->back()->with('success', 'Food item deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.');
        }
    }

    /**
     * Change Status of foods items
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, Food $food) {
        $food->status = $request->get('status');

        if($food->save()) {
            return redirect()->back()->with('success', 'Food updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.');
        }
    }

    public function delete_product_image(Food $food) {
        if($food->image) {
            $upload_path = 'uploads/images/';
            File::delete($upload_path . $food->image);
        }
        $food->image = null;
        if($food->save()) {
            return redirect()->back()->with('success', 'Food image deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.');
        }
    }

}
