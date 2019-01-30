<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    public function index()
    {

        $links = DB::table('links')->get();

        return view('laravelLinks', ['links' => $links]);

    }


    public function showLinksForm()
    {
        return view('showLinks');
    }

    function handleLinksForm(Request $request)
    {

    }
}
