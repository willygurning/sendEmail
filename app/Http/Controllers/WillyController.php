<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WillyEmail;
class WillyController extends Controller
{
    public function index(){
        Mail::to("willygurning17@gmail.com")->send(new WillyEmail());
        return "Email telah terkirim";
    }
}
