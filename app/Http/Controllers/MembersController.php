<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member');
    }

    public function fetch()
    {
        return response()->json(['member'=>Member::with('user')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $request->validate([
        //     'id'=>'required',
        //     'member_info'=>'required',
        //     'image'=>'required'
        // ]);

        $id = $request->id;
        $member_info = $request->member_info;
        $image = $request->image;

        $member = User::findOrFail($id)->member()->create([
            'member_info'=>$member_info,
            'image'=>$image,
        ]);
        // $member = User::all();

        return response()->json(['member'=>Member::with('user')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'modifymember'=>'required',
            'member_info'=>'required',
            'image'=>'required'
        ]);

        $member = Member::find($id);
        $member->member_info = $request->member_info;
        $member->image = $request->image;
        $modify = $request->modifymember;

        $member->save();
        
        return response()->json(['modifymember'=>$modify, 'member'=>Member::with('user')->get()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $member = new Member();
        $member1 = $member->whereId($id)->delete();
        
        return response()->json(["delete", 'member'=>Member::with('user')->get()]);
    }
}
