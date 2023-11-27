<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Member;

class UsersController extends Controller
{
    private $user;
    private $member;

    public function __construct(User $user, Member $member)
    {
        $this->user = $user;
        $this->member = $member;
    }

    public function index()
    {
        $all_members = $this->member->latest()->get();
        return view('admin.members.index')->with('all_members', $all_members);
    }
}
