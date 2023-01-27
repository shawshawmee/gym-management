<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Membership;

class MemberController extends Controller
{
    public function index(){
        $members = Member::latest()->get();
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('index')
            ->with('members', $members)
            ->with('trainers', $trainers)
            ->with('memberships', $memberships);
    }

    public function create(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();

        return redirect()->route('index')->with('success', 'Member added');
    }

    public function update(Request $request){
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
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
