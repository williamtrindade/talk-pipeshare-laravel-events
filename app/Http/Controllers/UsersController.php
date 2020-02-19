<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\UserCreatedEvent;

class UsersController extends Controller
{
    public function create(array $data)
    {
    	$user = User::create($data);
    	event(new UserCreatedEvent($user));
    	return $user;
    }
}
