<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class UserController extends Controller
{
    
    public function index() {

        return view('pages.admin.users.index');
    }

    public function show(User $user) {

    }

    public function create() {

        return view('pages.admin.users.create');
    }

    public function store() {

    }

    public function edit(User $user) {

    }

    public function update(Request $request, User $user) {

    }

    public function destory(User $user) {

    }
}
