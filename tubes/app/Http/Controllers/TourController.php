<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TourData;
use App\Models\Pembayaran;
use App\Models\Foods;
use Illuminate\Support\Facades\Session;
use Auth;

class TourController extends Controller
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
        
        if($data['wisata'] == 'Lembang Park & Zoo'){
            $data['total'] = 115000 * $data['jumlah'];
        }else if($data['wisata'] == 'Taman Hutan Raya'){
            $data['total'] = 67000 * $data['jumlah'];
        }else if($data['wisata'] == 'Dago Dreampark'){
            $data['total'] = 32000 * $data['jumlah'];
        }else if($data['wisata'] == 'The Great Asia Africa Lembang'){
            $data['total'] = 44000 * $data['jumlah'];
        }else if($data['wisata'] == 'Jendela Alam'){
            $data['total'] = 122000 * $data['jumlah'];
        }else if($data['wisata'] == 'Grafika Cikole'){
            $data['total'] = 125000 * $data['jumlah'];
        }

        Tours::create([
            'id_user' => $data['id_user'],
            'wisata' => $data['wisata'],
            'purchase_date' => $data['purchase_date'],
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'status' => "belum dibayar",
            'metode_pembayaran' => $data['metode_pembayaran'],
        ]);

        return redirect('/ticket')->with('success', 'Add Ticket Success');
    }

    public function pembayaran($id){
        $data = Tours::where('id', $id)->first();
        return view('unggahbayar', compact('data'));
    }

    public function storePembayaran(Request $request, $id){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('food'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        $data = $request->all();

        Pembayaran::create([
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'foto' => $final,
            'tour_id' => $id,
        ]);

        $tour = Tours::findorfail($id);

        $tour->update([
            'status' => 'Menunggu Konfirmasi Pembayaran',
        ]);

        return redirect()->route('tiket')->with('success', 'Upload Bukti Pembayaran Success');
    }

    public function tiket()
    {
        $data = Tours::where('id', Auth::user()->id)->get();
        $data2 = Foods::where('id', Auth::user()->id)->get();
        return view('ticket', compact('data', 'data2'));
    }


    /**
     * Tour Detail
     * 
     * @return response
     * 
     */

    public function tourDetail(Request $request)
    {
        $tour = Tours::all();
        //return view('ticket')->with('tour', $tour);
        return view('ticket', compact($tour));
    }

    public function detailUser($id)
    {
        $data = Tours::where('id', $id)->first();
        return view('detailUser', compact('data'));
    }

    public function pembayaranMakanan($id){
        $data = Foods::where('id', $id)->first();
        return view('unggahbayarmakanan', compact('data'));
    }

    public function storePembayaranMakanan(Request $request, $id){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $imagePath = $request->foto->extension();

        $file = $request->file('foto')->move(public_path('food'), $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath);

        $final = $request->file('foto')->getClientOriginalName().$randomString.'.'.$imagePath;

        $data = $request->all();

        Pembayaran::create([
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => Auth::user()->email,
            'jumlah' => $data['jumlah'],
            'total' => $data['total'],
            'foto' => $final,
            'tour_id' => $id,
        ]);

        $tour = Foods::findorfail($id);

        $tour->update([
            'status' => 'Menunggu Konfirmasi Pembayaran',
        ]);

        return redirect()->route('tiket')->with('success', 'Upload Bukti Pembayaran Success');
    }

    public function detailMakanan($id)
    {
        $data = Foods::where('id', $id)->first();
        return view('detailMakanan', compact('data'));
    }

}

