<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
       
       $contact=User::with('contact')->get();
       return response([
        "contact"=>$contact
       ]);
    }
}
