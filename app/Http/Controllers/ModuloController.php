<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class ModuloController extends Controller
{
    
    function __construct()
    {
         $this->middleware(['auth' ,'roles:admin,com,carnet']);
    }

    public function index()
    {
        return view('index');
    }
}
