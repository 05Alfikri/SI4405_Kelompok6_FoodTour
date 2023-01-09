<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foods;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
     //
    /**
     * Add Food
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function food(Request $request)
    {
        $data = $request->all();

        if($data['menu'] == 'Mie Kocok'){
            $data['total'] = 15000 * $data['jumlah'];
        }else if($data['menu'] == 'Batagor Bandung'){
            $data['total'] = 10000 * $data['jumlah'];
        }else if($data['menu'] == 'Karedok'){
            $data['total'] = 10000 * $data['jumlah'];
        }else if($data['menu'] == 'Nasi Tutug Oncom'){
            $data['total'] = 25000 * $data['jumlah'];
        }else if($data['menu'] == 'Lotek'){
            $data['total'] = 12000 * $data['jumlah'];
        }else if($data['menu'] == 'Colenak'){
            $data['total'] = 15000 * $data['jumlah'];
        }else if($data['menu'] == 'Tahu Susu Bandung'){
            $data['total'] = 15000 * $data['jumlah'];
        }

        Foods::create([
            'id_user' => $data['id_user'],
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'menu' => $data['menu'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'status' => "belum bayar",
        ]);

        return redirect('/packages')->with('success', 'Add Ticket Success');
    }
}
