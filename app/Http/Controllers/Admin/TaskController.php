<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.project.task.index', compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('admin.project.task.createOrUpdate', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $task = new Task;
        $task->title = $request->title;
        $task->user_id = Auth::id();
        $task->des = $request->des;
        $task->start_date = $request->start_date;
        $task->end_dete = $request->end_date;
        $task->project_id = $request->project_id;



        $image=$request->file('file');
        if ($image){
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='file/pdf';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if ($success) {
            $task['file']=$image_url;

             }
         }


        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $photo) {
                $path = $photo->store('task/photos');
                array_push($images, $path);
            }
            $task['images']=json_encode($images);
        }



        $task->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Task::find($id);
        $comments = Comment::where('task_id', $id)->get();
        return view('admin.project.task.show', compact('show', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Task::find($id);
        $projects = Project::all();
        return view('admin.project.task.createOrUpdate', compact('projects', 'edit'));
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
        $task = Task::find($id);
        $task->title = $request->title;
        $task->user_id = Auth::id();
        $task->des = $request->des;
        $task->start_date = $request->start_date;
        $task->end_dete = $request->end_date;
        $task->project_id = $request->project_id;


        if($request->file){
            $image=$request->file('file');
            if ($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='file/pdf';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                $task['file']=$image_url;

                }
            }
        }else{
            $task['file'] = $task->file;
        }
        


        if($request->images){
            $images = array();
            if ($request->hasFile('images')) {
                foreach ($request->images as $key => $photo) {
                    $path = $photo->store('task/photos');
                    array_push($images, $path);
                }
                $task['images']=json_encode($images);
            }
        }else{
            $task['images']= $task->images;
        }
        



        $task->save();
        return redirect()->route('admin.task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('admin.task.index');
    }
}
