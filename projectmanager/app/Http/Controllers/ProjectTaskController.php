<?php

namespace App\Http\Controllers;

use App\ProjectTask;
use Illuminate\Http\Request;
use App\Member;
use App\Module;
use App\Project;

class ProjectTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pj = ProjectTask::all();
        return view('project_task.index',['pj'=>$pj]);
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
       return view('project_task.create',['mb'=>$mb,'pr'=>$pr,'pm'=>$pm]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pj = new ProjectTask;

        $pj->project_id = $request->input('project_id');
        $pj->module_id  = $request->input('module_id');
        $pj->member_id = $request->input('member_id');
        $pj->message_subject  = $request->input('message_subject');
        $pj->message_text = $request->input('message_text');
        $pj->comments  = $request->input('comments');
        $pj->task_percentage  = $request->input('task_percentage');

        $pj->save();

     return  redirect('project_task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectTask  $projectTask
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTask $projectTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectTask  $projectTask
     * @return \Illuminate\Http\Response
     */
    public function edit($projectTask)
    {
        $pj = ProjectTask::find($projectTask);
       
         $mb = Member::all();
       $pr = Project::all();
       $pm = Module::all();
       return view('project_task.edit',['pj'=>$pj,'mb'=>$mb,'pr'=>$pr,'pm'=>$pm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectTask  $projectTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectTask $projectTask)
    {
        $pj = ProjectTask::Find($projectTask)->first();
        
        $pj->project_id = $request->input('project_id');
        $pj->module_id  = $request->input('module_id');
        $pj->member_id = $request->input('member_id');
        $pj->message_subject  = $request->input('message_subject');
        $pj->message_text = $request->input('message_text');
        $pj->comments  = $request->input('comments');
        $pj->task_percentage  = $request->input('task_percentage');


        $pj->update(); 
       
       
       return redirect('project_task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectTask  $projectTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectTask $projectTask)
    {
        $pj = ProjectTask::find($projectTask)->first();
        $pj->delete(); 

        return redirect('project_task');
    }
}
