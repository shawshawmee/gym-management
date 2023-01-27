<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        return view('index')->with('members', Member::latest()->get());
    }

    public function create(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();

        return redirect()->route('index')->with('success', 'Member added');
    }

    public function update(Request $request){
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();

        return redirect()->route('index')->with('success', 'Member updated');
    }

    public function edit($id){
        $member = Member::find($id);

        return view('edit')->with('member', $member);
    }

    public function delete($id){
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('index')->with('delete', 'Member deleted');
    }
}
