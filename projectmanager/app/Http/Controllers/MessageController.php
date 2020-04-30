<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Module;
use App\Project;
use App\Member;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Message::all();
        return view('message.index',['message'=>$message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $mb = Member::all();
       $pr = Project::all();
       $pm = Module::all();
       return view('message.create',['pr'=>$pr,'pm'=>$pm,'mb'=>$mb]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messsage = new Message;
        $messsage->project_id = $request->input('project_id');
        $messsage->module_id = $request->input('module_id');
        $messsage->message_subject = $request->input('message_subject');
        $messsage->message_text = $request->input('message_text');
        $messsage->member_id= $request->input('member_id');

        $messsage->save();

        return  redirect('message');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $mb = Member::all();
       $pr = Project::all();
       $pm = Module::all();
        $message = Message::find($id);
       
          return view('message.edit',['message'=>$message,'pr'=>$pr,'pm'=>$pm,'mb'=>$mb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Message $message)
    {

        
        $message = Message::Find($message)->first();


        $message->project_id = $request->input('project_id');
        $message->module_id = $request->input('module_id');
        $message->message_subject = $request->input('message_subject');
        $message->message_text = $request->input('message_text');
        $message->member_id= $request->input('member_id');

        $message->update(); 
       
       
        return redirect('message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message = Message::find($message)->first();
        $message->delete(); 

        return redirect('message');
    }
}
