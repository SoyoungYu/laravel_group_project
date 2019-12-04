<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use App\Image;
use Illuminate\Support\Facades\Auth;
use File;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image(Request $request)
    {
        $image = new Image(); // 이미지 인스턴스
        $user = new User(); // 유저 인스턴스
 
        if (0) { // session 값 이미지 테이블에 값이 존재할 경우 0이면 존재 안함 1 존재
            $image_path = public_path('images').'/'.$image->find(1)->filename; // session 값
            $image->find(1)->delete(); // session 값
            File::delete($image_path);
        }

        // 이미지 새로고침 및 바꾸기
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $image->id = $request->id; // session 값
        $image->imagename = $imageName;
        $image->save();

        return response()->json('success');
    }

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
        debug($member->user()->where('user_id', $id)->get());

        return response()->json(['member'=>$member->with('user')->where('user_id', $id)->get()]);
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $member_info = $request->member_info;

        $image = new Image();
        $imagename = $image->find($id)->imagename;

        $member = User::findOrFail($id)->member()->create([
            'id'=>$id,
            'member_info'=>$member_info,
            'imagename'=>$imagename,
        ]);

        $member->save();

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
        $image = new Image();
        $imagename = $image->find($id)->imagename; // 이미지 찾기
        
        $members = new Member();
        $member = $members->find($id);

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
        $image = new Image();
        if($image->find($id))
        {
            $image->find($id)->delete();
        }
        $member = $members->find($id);
        $image_path = public_path('images').'/'.$member->imagename;

        if (File::exists($image_path)) { // 파일 경로
            File::delete($image_path);
        }

        $member->delete();
        
        return response()->json(['member'=>$members->with('user')->get()]);
    }
}
