<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Loan;

class MemberController extends Controller
{
    private $member;
    private $addCbu;

    public function __construct(Member $member){
        $this->member = $member;
    }

    public function addMember(){
        return view('members.add-member');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|min:1|max:50',
            'middle_name' => 'required|min:1|max:50',
            'last_name' => 'required|min:1|max:50',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048',
            'date_of_birth' => 'required',
            'place_of_birth' => 'required|min:1|max:200',
            'contact_number' => 'required|min:1|max:11',
            'email_address' => 'required|email',
            // 'no_of_dependents' => 'integer|between:1,5',
            // 'religion' => 'min:1|max:40',
            // 'nationality' => 'min:1|max:20',
            'present_address' => 'required|min:1|max:400',
            'civil_status' => 'required',
            'spouse_first_name' => 'required|min:1|max:50',
            'spouse_middle_name' => 'required|min:1|max:50',
            'spouse_last_name' => 'required|min:1|max:50',
            'tin_no' => 'required|min:1|max:20'
        ]);

        $this->member->first_name = $request->first_name;
        $this->member->middle_name = $request->middle_name;
        $this->member->last_name = $request->last_name;
        $this->member->image = 'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));
        $this->member->date_of_birth = $request->date_of_birth;
        $this->member->place_of_birth = $request->place_of_birth;
        $this->member->contact_number = $request->contact_number;
        $this->member->email_address = $request->email_address;
        $this->member->no_of_dependents = $request->no_of_dependents;
        $this->member->religion = $request->religion;
        $this->member->nationality = $request->nationality;
        $this->member->present_address = $request->present_address;
        $this->member->civil_status = $request->civil_status;
        $this->member->spouse_first_name = $request->spouse_first_name;
        $this->member->spouse_middle_name = $request->spouse_middle_name;
        $this->member->spouse_last_name = $request->spouse_last_name;
        $this->member->tin_no = $request->tin_no;
        $this->member->save();

        return redirect()->back()->with('new-member','New member added successfully');
    }

    public function showProfile($member_id){
        $member_details = $this->member->findOrFail($member_id);
        return view('members.profile')->with('member_details', $member_details);
    }

    public function editMember($member_id){
        $member_details = $this->member->findOrFail($member_id);
        return view('members.edit')->with('member_details', $member_details);
    }

    public function updateMemberData(Request $request, $member_id){
        $update_details = $this->member->findOrFail($member_id);
        $update_details->first_name = $request->first_name;
        $update_details->middle_name = $request->middle_name;
        $update_details->last_name = $request->last_name;
        $update_details->date_of_birth = $request->dob;
        $update_details->place_of_birth = $request->pob;
        $update_details->contact_number = $request->contact_no;
        $update_details->email_address = $request->email_address;
        $update_details->present_address = $request->present_address;
        $update_details->civil_status = $request->civil_status;
        $update_details->tin_no = $request->tin_no;
        $update_details->save();

        return redirect()->back();
    }

    public function checkLoan($member_id){
        #Option 1
        // $loan_info = $this->member->findOrFail($member_id);
        // $member_loan_info = $loan_info->loan;

        #Option 2
        $member_loan_info = $this->member->findOrFail($member_id)->phone;
        return view('members.search')->with('member_loan_info', $member_loan_info);
    }
}
