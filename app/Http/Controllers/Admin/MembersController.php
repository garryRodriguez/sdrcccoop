<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;

class MembersController extends Controller
{
    private $user;
    private $member;

    public function __construct(User $user, Member $member)
    {
        $this->member = $member;
    }

    public function index()
    {
        $all_members = $this->member->withTrashed()->latest()->paginate(7);
        return view('admin.members.index')->with('all_members', $all_members);
    }

    public function deactivate($id)
    {
        $this->member->destroy($id);
        return redirect()->back();
    }

    public function activate($id)
    {
        $this->member->onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
