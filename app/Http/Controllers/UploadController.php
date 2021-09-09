<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadTrait;
use App\Models\Biodata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    use UploadTrait;
    public function store(Request $request)
    {
        // 1. validasi form
        $this->validate($request, [
            'nama'   => 'required|string|max:255',
            'nim'    => 'required|string',
            'alamat' => 'required|string|max:255',
            'foto'   => 'required|image|mimes:jpg,png,csv'
        ]);

        //TODO 2. simpan file foto
        $foto = $this->uploadFoto($request);

        Biodata::create([
            'nama'   => $request->get('nama'),
            'nim'    => $request->get('nim'),
            'alamat' => $request->get('alamat'),
            'foto'   => $foto
        ]);

        // 4. redirect dan tampilkan pesan sukses
        session()->flash('success', 'Data telah ditambahkan!');
        return back();
    }
}
