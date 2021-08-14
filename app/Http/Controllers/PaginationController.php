<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class PaginationController extends Controller
{

    public function allusers()
    {
$users=DB::table('user')->paginate(10);
return view ('user',compact('users'));

    }
}
