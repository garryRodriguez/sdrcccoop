<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Loan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $member;
    private $loan;

    public function __construct(Member $member, Loan $loan)
    {
        $this->member = $member;
        $this->loan = $loan;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('landing-page');
    }

    public function home()
    {
        $all_members = $this->member->latest()->paginate(7);
        return view('home')->with('all_members', $all_members);
    }

    public function search(Request $request){
        $members = $this->member
            ->where('last_name', 'like', '%'.$request->search.'%')->get();
        return view('members.search')->with('members', $members)->with('search', $request->search);
    }
    
    public function viewLoanSubMenuLandingPage()
    {
        return view('members.loans.loan-sub-menus');
    }
}
