<?php

namespace App\Http\Controllers;

use App\Model\Food;
use App\Model\Contact;
use App\Model\Category;
use App\Model\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $total_cats = Category::count();
        $total_food_items = Food::count();
        $reservation_unread = Reservation::whereStatus(0)->count();
        $contact_unread = Contact::where('mark_as_read', 0)->count();
        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.dashboard.index', compact('total_cats', 'total_food_items', 'reservation_unread', 'contact_unread', 'reservations'));
    }
}
