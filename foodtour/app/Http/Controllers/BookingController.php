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
            'id' => $data['id'],
            'purchase_date' => $data['purchase_date'],
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
        ]);


        return redirect('/ticket')->with('success', 'Add Ticket Success');
    }
}

