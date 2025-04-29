<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function index()
    {
        return view('support_help.support'); // এটি resources/views/support.blade.php ফাইল রেন্ডার করবে
    }
}
