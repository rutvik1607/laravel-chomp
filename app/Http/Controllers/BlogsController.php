<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog as Blogs;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class BlogsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    // public function validation(Request $request)
    // {

    // }


    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'ref1' => 'required',
            // 'file' => 'required',
            // 'image' => 'required',
        ]);
        echo $request->file('image')->store('uploads');
        // insert query
        $blog = new Blogs;
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->ref1 = $request->ref1;
        // $blog->image = $request->file("image")->store('public/images/blog/');
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/images/blog'), $image_name);
        $blog->image = $image_name;

        $blog->save();
        return redirect('/admin/blogs/list');
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

    public function delete($id)
    {
        $blog = Blogs::find($id);
        if (!is_null($blog)) {
            $blog->delete();
        }
        // return redirect()->back();
        return redirect('/admin/blogs/list');
    }
    public function edit($id)
    {

        $blog = Blogs::find($id)->toArray();
        $data = compact('blog');
        return view('blogs.edit')->with('blog', $data);
    }
    public function editBlog($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'ref1' => 'required',
            // 'file' => 'required',
            // 'image' => 'required',
        ]);
        $blog = Blogs::find($id);

        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->ref1 = $request->ref1;

        if ($request->file('image') != '') {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('images\blog'), $image_name);
            $blog->image = $image_name;
        } else {
            $blog->image = $blog->image;
        }

        $blog->save();
        return redirect('/admin/blogs/list');
    }
    public function removeImage($id)
    {
        $blog = Blogs::find($id);
        File::delete(public_path('/images/blog/' . $blog->image));
        $blog->image = '';
        $blog->save();
        // return redirect('/admin/blogs/edit/' . $id);
        return back();
    }
}
