<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadTrait;
use App\Models\Biodata;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Models\Contact;

class AjaxController extends Controller
{
    public function create()
    {
        return view('test');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'subject'       => 'required',
            'mobile_number' => 'required',
            'message'       => 'required',
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'mobile_number' => $request->mobile_number,
            'message' => $request->message
        ]);

        #Create or update here
        return back();
    }
}
