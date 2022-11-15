<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog as Blogs;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BlogsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index(Request $request)
    {
        $labels = ['id', 'title', 'category', 'action'];
        $unsetFiled = ['name', 'description', 'image', 'ref1', 'created_at', 'updated_at'];
        $action = ['delete' => 'blogDelete', 'edit' => 'blogEdit'];

        $paginate = Blogs::paginate(5);
        $data = Blogs::paginate(5)->toArray();

        return view('blogs.list')->with(['datas' => $data, 'labels' => $labels, 'filedNotShow' => $unsetFiled, 'action' => $action, 'paginate' => $paginate]);
    }

    public function delete(Request $request)
    {
        # code...
    }
}
