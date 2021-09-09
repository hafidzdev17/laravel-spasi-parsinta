<?php

namespace App\Http\Traits;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

trait UploadTrait
{
    protected function uploadFoto(Request $request)
    {
        $foto = null;

        if ($request->file('foto')) {
            $file =  $request->file('foto');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $acak;
            $request->file('foto')->move("images/buku", $fileName);
            $foto = $fileName;
        }

        return $foto;
    }
}
