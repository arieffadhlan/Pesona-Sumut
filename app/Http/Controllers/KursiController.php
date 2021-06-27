<?php

namespace App\Http\Controllers;

use App\Models\Kursi;
use Illuminate\Http\Request;

class KursiController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        
        Kursi::create($input);
        session()->flash('success', 'Your seat has been successfully booked');
        
        return redirect('posts');
    }
}
