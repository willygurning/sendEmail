<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WillyEmail;
class WillyController extends Controller
{
    public function index(){
        Mail::to("upscale.campaign61@gmail.com")->send(new WillyEmail());
        return "Email telah terkirim";
    }
}
// , upscale.campaign61@gmail.com, upscale.campaign62@gmail.com, "willygurning17@gmail.com",