<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function profile($id)
    {
        $item = User::findOrFail($id);
        return view('pages.profile', compact('item'));
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }
}
