<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show(){
        $contact = new Contact();
        return view('layouts.frontend_layout',[
            'contact' => $contact
        ]);
    }
}
