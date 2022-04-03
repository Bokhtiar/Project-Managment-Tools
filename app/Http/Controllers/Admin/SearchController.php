<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\StudentAssign;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->item == "student")
        {
            $items = User::orwhere('name','like','%'.$request->search_key.'%')->get();
            return view('admin.search.student',compact('items'));

        }else{
            $items = Project::orwhere('name','like','%'.$request->search_key.'%')->get();
            return view('admin.search.project',compact('items'));
        }
    }

    public function student($id)
    {
        $user = User::find($id);
        return view('admin.search.studentinfo' , compact('user'));        
    }

    public function project($id)
    {
        $studentAssigns = StudentAssign::where('project_id', $id)->get();
        return view('admin.search.projectStudentList' , compact('studentAssigns'));        
    }

}



// public function search(Request $request){
//     $product_search_value=$request->search;

//     $product_search=product::orwhere('product_title','like','%'.$product_search_value.'%')
//                            ->orwhere('product_description','like','%'.$product_search_value.'%')
//                            ->where('product_status',1)
//                            ->get();
//     return view('user.product_search',compact('product_search'));

// }