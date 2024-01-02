<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return 'Admin';
    }

    public function course() {
        return 'Course';
    }

    public function user() {
        return 'User';
    }

    public function comment() {
        return 'Comment';
    }
}
