<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\TourData;
use App\Models\Pembayaran;
use App\Models\Foods;
use Illuminate\Support\Facades\Session;
use Auth;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Tours::all();
        $data2 = Foods::all();
        return view('tiketadmin', compact('data', 'data2'));
    }

    public function updateStatus($id)
    {
        $data = Tours::where('id', $id)->first();
        $pembayaran = Pembayaran::where('tour_id', $id)->first();
        return view('update-status', compact('data', 'pembayaran'));
    }

    public function storeUpdateStatus(Request $request,$id)
    {
        $data = Tours::where('id', $id)->first();
        if($request->status == "Lunas"){
            $data->update([
                'status' => "Pembayaran telah dikonfirmasi",
            ]);
            $data->save();
        }else if($request->status == "Ditolak"){
            $data->update([
                'status' => "Pembayaran ditolak",
            ]);
            $data->save();
        }

        return redirect()->route('admin')->with('success', 'Update Status Success');
    }

    public function updateStatusMakanan($id)
    {
        $data = Foods::where('id', $id)->first();
        $pembayaran = Pembayaran::where('tour_id', $id)->first();
        return view('update-status-makanan', compact('data', 'pembayaran'));
    }

    public function storeUpdateStatusMakanan(Request $request,$id)
    {
        $data = Foods::where('id', $id)->first();
        if($request->status == "Lunas"){
            $data->update([
                'status' => "Pembayaran telah dikonfirmasi",
            ]);
            $data->save();
        }else if($request->status == "Ditolak"){
            $data->update([
                'status' => "Pembayaran ditolak",
            ]);
            $data->save();
        }

        return redirect()->route('admin')->with('success', 'Update Status Success');
    }

    public function delete($id)
    {
        $data = Tours::where('id', $id)->first();
        $data->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }

    public function deleteMakanan($id)
    {
        $data = Foods::where('id', $id)->first();
        $data->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }
}
