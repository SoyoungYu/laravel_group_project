<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qna;
use App\Reply;

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

        if($request->control == 'qna'){
            $qna = new Qna();
            $qna->user_id = 'test';
            $qna->title = $request->title;
            $qna->question = $request->question;
            $qna->view = 0;
    
            $qna->save();
            
            return response()->json(['msg'=>"Success"]);
        }
        elseif($request->control == 'reply'){
            $reply = new Reply();
            $reply->qna_id = $request->qna_id;
            $reply->user_id = $request->user_id;
            $reply->reply = $request->reply;
    
            $reply->save();
            
            return response()->json(['msg'=>"Success"]);
        }
        
    }

    public function show($id)
    {
        $qna = new Qna();
        $added_view = $qna->find($id)->view + 1;
        $qna->find($id)->update(['view' => $added_view]);

        return response()->json(['qna'=>Qna::where('id',$id)->get(), 'reply'=>Reply::where('qna_id', $id)->get()]);
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
