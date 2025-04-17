<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class mainController extends Controller
{
    public function postFile(Request $request) {

        $name = $request->name;
        $file = $request->file('logo');

        $filename = $request->logo;
        Storage::disk('s3')->put('images/' . $filename, file_get_contents($filename));
        DB::statement("INSERT INTO my_client (name, client_logo) VALUES ($name, $file )");
        return redirect()->back();
    }
}
