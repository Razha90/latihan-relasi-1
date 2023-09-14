<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class phone extends Controller
{
    public function index() {
        $phone = User::find(1)->phone;
        return $phone;
    }
}
