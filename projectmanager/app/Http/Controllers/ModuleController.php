<?php

namespace App\Http\Controllers;

use App\Module;
use App\Project;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
         $module = Module::all();
         return view('module.index',['module'=>$module]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

       $pr = Project::all();
       return view('module.create',['pr'=>$pr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module;

        $module->project_id = $request->input('project_id');
        $module->module_id = $request->input('module_id');
        $module->module_name  = $request->input('module_name');

        $module->save();

     return  redirect('module');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($module)
    {
       $module = Module::find($module);
       $pr = Project::all();
      
       
       return view('module.edit',['module'=>$module,'pr'=>$pr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $module =Module::Find($module)->first();
        $module->project_id = $request->input('project_id');
        $module->module_id = $request->input('module_id');
        $module->module_name = $request->input('module_name');

        $module->update(); 
       
       
       return redirect('module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
      $module = Module::find($module)->first();
      $module->delete();
      return redirect('module');
    }
}
