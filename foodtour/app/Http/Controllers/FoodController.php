<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foods;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
     //
    /**
     * Add Car
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function food(Request $request)
    {
        $data = $request->all();

        Foods::create([
            'id_user' => $data['id_user'],
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'menu' => $data['menu'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
        ]);

        return redirect('/packages')->with('success', 'Add Ticket Success');
    }
}
