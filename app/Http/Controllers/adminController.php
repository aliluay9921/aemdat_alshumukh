<?php

namespace App\Http\Controllers;

use App\Models\Project_Complete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
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
            return back()->with(['errors' => $validation->errors()->all()]);
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
}
