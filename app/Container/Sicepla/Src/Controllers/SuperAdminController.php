<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function usuarios(){
        return view('sicepla.super-admin.super-admin-usuarios');
    }
}
