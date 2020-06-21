<?php

namespace App\Http\Controllers;

use App\Model\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(10);
        return view( 'admin.reservation.index', compact( 'reservations' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->status = $request->get('status');
        if($reservation->save()) {
            return redirect()->back()->with('success', 'Reservation confirmed');
        } else {
            return redirect()->back()->with('error', 'Reservation failed. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        if($reservation->delete()) {
            return redirect()->back()->with('success', 'Reservation deleted');
        } else {
            return redirect()->back()->with('error', 'Please try again.');
        }
    }
}
