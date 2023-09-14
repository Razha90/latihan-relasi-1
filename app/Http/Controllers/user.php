<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;

class user extends Controller
{
    public function index() {
        $user = phone::find(11)->user;
        return $user;
    }
}
