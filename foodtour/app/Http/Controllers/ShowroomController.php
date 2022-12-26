<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
    //


    /**
     * Add Car
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function addCar(Request $request)
    {
        $data = $request->all();
        $img = Storage::disk('public')->put('img', $request->file('image'));

        Showrooms::create([
            'id_user' => $data['id_user'],
            'name' => $data['name'],
            'brand' => $data['brand'],
            'purchase_date' => $data['purchase_date'],
            'description' => $data['description'],
            'image' => $img,
            'status' => $data['status'],
        ]);


        return redirect('/list')->with('success', 'Add Car Success');
    }
}
