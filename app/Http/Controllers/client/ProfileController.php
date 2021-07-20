<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $categories = MainCategory::selection()->active()->get();
        $title = 'Profile';
        return view('client.profile', compact('categories', 'title'));
    }
}
