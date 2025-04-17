<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mainController extends Controller
{
    public function postFile(Request $request) {
//        $request->file('logo')->storeAs('public/logos', $request->file('logo')->getClientOriginalName());
        $filename = $request->logo;
        Storage::disk('s3')->put('images/' . $filename, file_get_contents($filename));
        dd($request);
        return redirect()->back();
    }
}
