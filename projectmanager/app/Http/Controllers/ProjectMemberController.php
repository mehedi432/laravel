<?php

namespace App\Http\Controllers;

use App\ProjectMember;
use Illuminate\Http\Request;
use App\Project;
use App\Module;
use App\Member;

class ProjectMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pm = ProjectMember::all();
        return view('project_member.index',['pm'=>$pm]);
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
       
       return view('project_member.create',['pr'=>$pr,'pm'=>$pm,'mb'=>$mb]);
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pm = new ProjectMember;

        $pm->project_id = $request->input('project_id');
        $pm->module_id  = $request->input('module_id');
        $pm->member_id = $request->input('member_id');
        $pm->member_name  = $request->input('member_name');
        $pm->member_type = $request->input('member_type');
        $pm->message  = $request->input('message');

        $pm->save();

     return  redirect('project_member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectMember $projectMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $mb = Member::all();
     $pr = Project::all();
     $pm = Module::all();
     $projectmember = ProjectMember::find($id);

      



       return view('project_member.edit',['projectmember'=>$projectmember,'pr'=>$pr,'pm'=>$pm,'mb'=>$mb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectMember $projectMember)
    {
        $pm = ProjectMember::Find($projectMember)->first();
        $pm->project_id = $request->input('project_id');
        $pm->module_id  = $request->input('module_id');
        $pm->member_id = $request->input('member_id');
        $pm->member_name  = $request->input('member_name');
        $pm->member_type = $request->input('member_type');
        $pm->message  = $request->input('message');

        $pm->update(); 
       
       
       return redirect('project_member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectMember  $projectMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectMember $projectMember)
    {
        $pm = ProjectMember::find($projectMember)->first();
        $pm->delete(); 

        return redirect('project_member');
    }
}
