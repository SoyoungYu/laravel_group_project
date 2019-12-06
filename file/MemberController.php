<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use Illuminate\Support\Facades\Auth;
use File;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response()->json(['member'=>Member::with('user')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = new Member();
        return response()->json(['member'=>$member->with('user')->where('user_id', $id)->get()]);
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $member_info = $request->member_info;
        $image = $request->image;

        $imagename = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imagename);

        $member = User::findOrFail($id)->member()->create([
            'id'=>$id,
            'member_info'=>$member_info,
            'imagename'=>$imagename,
        ]);

        return response()->json('success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->id;
        $member_info = $request->member_info;
        $image = $request->image;

        $members = new Member;
        $member = $members->find($id);

        $image_path = public_path('images').'/'.$member->imagename;

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $imagename = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imagename);

        $member->member_info = $request->member_info;
        $member->imagename = $imagename;
        $member->save();

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = new Member();
        $member = $members->find($id);

        $image_path = public_path('images').'/'.$member->imagename;

        if (File::exists($image_path)) { 
            File::delete($image_path);
        }

        $member->delete();
        
        return response()->json(['member'=>$members->with('user')->get()]);
    }
}
