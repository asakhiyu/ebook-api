<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118028',
                'name' => 'Asakhiyu Nurul Fadhilah',
                'gender' => 'Perempuan',
                'phone' => '085741111996',
                'class' => 'XII RPL 1'];
    }
}