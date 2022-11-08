<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\DataBarang;

class ControllerDataBarang extends Controller
{
    public function create (Request $request)
    {
        $data = $request->all();
        $databarang = Databarang::create($data);

        return response()->json($databarang);
    }

    public function index ()
    {
        $databarang = Databarang::all();
        return response()->json($databarang);
    }

    public function detail($id)
    {
        $databarang = Databarang::find($id);
        return response()->json($databarang);
    }

    public function update (Request $request,$id)
    {
        $databarang = Databarang::whereId($id)->update([
        'idBarang' => $request->input('idBarang'),
        'NamaBarang' => $request->input('NamaBarang'),
        'DeskripsiBarang' => $request->input('DeskripsiBarang'),
        ]);
        if ($databarang) {
            // code...
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil Diupdate',
                'data' => $databarang
            ],201);
        }else {
            return response()->json([
                'success' => false,
                'message' => "data Gagal Diupdate",
            ],400);
        }
    }

}
