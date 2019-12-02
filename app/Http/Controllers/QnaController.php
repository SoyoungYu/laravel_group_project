<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qna;

class QnaController extends Controller
{

    public function index()
    {
        return response()->json(['qnas'=>Qna::orderBy('id', 'ASC')->get()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $qna = new Qna();
        $qna->user_id = 'test';
        $qna->title = $request->title;
        $qna->question = $request->question;
        $qna->view = 0;

        $qna->save();
        
        return response()->json(['msg'=>"Success"]);
    }

    public function show($id)
    {
        $qna = new Qna();
        $added_view = $qna->find($id)->view + 1;
        $qna->find($id)->update(['view' => $added_view]);
        return response()->json(['qna'=>Qna::where('id',$id)->get()]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $qna = new Qna();
        $qna->find($id)->update(['title' => $request->title, 'question' => $request->question]);
        return response()->json(['msg'=>"Success"]);
        
    }

    public function destroy($id)
    {
        $qna = new Qna();
        $qna->find($id)->delete();

        return response()->json(['msg'=>"Success"]);
    }
}
