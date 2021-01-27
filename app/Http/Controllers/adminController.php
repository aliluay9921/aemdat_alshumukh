<?php

namespace App\Http\Controllers;

use App\Models\mechanisms;
use App\Models\Project_Complete;
use App\Models\staf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{


    public function index()
    {
        $getproject = Project_Complete::where('type', 1)->count();
        $getprojectnot = Project_Complete::where('type', 0)->count();
        $stafs = staf::all();
        $mechanisms = mechanisms::all();
        return view('admin.admin', compact('getproject', 'getprojectnot', 'stafs', 'mechanisms'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title'    => 'required',
            'desc'    => 'required',
            'image'    => 'required',
            'select'  => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()]);
        }
        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = 'image';
        $request->image->move($path, $file_name);
        Project_Complete::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'type' => $request->select,
            'image' => $file_name
        ]);
        return back()->with(['success' => 'successfuly insert']);
    }
    public function get()
    {
        $get = Project_Complete::where('type', 1)->get();
        return view('admin.project', compact('get'));
    }

    public function fetch()
    {
        $get = Project_Complete::where('type', 0)->get();
        return view('admin.projectnot', compact('get'));
    }

    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'created_at'    => 'date_format:Y-m-d',
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        Project_Complete::find($request->id)->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'created_at' => $request->created_at
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }

    public function delete(Request $request)
    {
        $get = Project_Complete::find($request->id);
        if (!$get)
            return redirect()->back();

        $get->delete();
        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request->id
        ]);
    }
    public function completed($id)
    {
        $get = Project_Complete::find($id)->update([
            'type' => 1
        ]);
        return back()->with(['message' => 'successfuly completed']);
    }
    public function staf()
    {
        $stafs = staf::all();
        $mechanisms = mechanisms::all();


        return view('admin.staf', compact('stafs', 'mechanisms'));
    }

    public function edit(Request $request)
    {

        $get = staf::find($request->id)->update([
            'name' => $request->name,
            'count' => $request->count
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }


    public function machin(Request $request)
    {

        $get = mechanisms::find($request->id)->update([
            'name' => $request->name,
            'count' => $request->count
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
}