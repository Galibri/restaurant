<?php

namespace App\Http\Controllers;

use App\Model\Food;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Category;
use App\Model\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = Slider::orderBy('created_at', 'desc')->get();
        $foods = Food::whereStatus(1)->orderBy('created_at', 'desc')->paginate(50);
        $featured = Food::whereStatus(1)->orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::has('food')->orderBy('title', 'asc')->get();
        return view('frontend.index', compact('slides', 'foods', 'categories', 'featured'));
    }


    public function make_reservation(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'reservation_date' => 'required',
            'reservation_time' => 'required',
        ]);

        $reservation = new Reservation;
        $reservation->name = $request->get('name');
        $reservation->email = $request->get('email');
        $reservation->phone = $request->get('phone');
        $reservation->reservation_date = $request->get('reservation_date');
        $reservation->reservation_time = $request->get('reservation_time');
        $reservation->message = $request->get('message');
        $reservation->status = 0;
        if($reservation->save()) {
            return redirect()->back()->with('success', 'Reservation request sent. We will contact you over phone.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }

    }

    public function contact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' =>  'required|email',
            'subject' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        if($contact->save()) {
            return redirect()->back()->with('success', 'Message sent. We will contact you shortly.');
        } else {
            return redirect()->back()->with('error', 'Please try again letter.'); 
        }

    }
}
