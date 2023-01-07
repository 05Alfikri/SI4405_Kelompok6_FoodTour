<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    //
    /**
     * Add Car
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function book(Request $request)
    {
        $data = $request->all();

        Bookings::create([
            'id_user' => $data['id_user'],
            'wisata' => $data['wisata'],
            'purchase_date' => $data['purchase_date'],
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'metode_pembayaran' => $data['metode_pembayaran'],
        ]);

        return redirect('/book')->with('success', 'Add Ticket Success');
    }

    /**
     * Show Car
     * 
     * @return response
     * 
     */
    public function showTicket(Request $request)
    {
        $booking = Bookings::all();
        return view('ticket')->with('booking', $booking);
    }
}

