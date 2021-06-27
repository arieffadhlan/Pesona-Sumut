<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        
        Contact::create($input);

        session()->flash('success-home', 'Your message was sent successfully');
        
        return redirect('homePage');
    }
}
