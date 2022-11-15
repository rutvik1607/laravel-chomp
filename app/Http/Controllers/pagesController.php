<?php

namespace App\Http\Controllers;

use App\Models\page as Pages;
use App\Models\User;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class pagesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public  function index()
    {
        $labels = ['id', 'name', 'url', 'Front', 'status', 'action'];
        $unsetFiled = ['created_at', 'updated_at'];
        $action = ['delete' => 'addDelete', 'edit' => 'addEdit', 'url' => 'allPages'];

        $paginate = Pages::paginate(5);
        $data = Pages::paginate(5)->toArray();

        return view('pages.list')->with(['datas' => $data, 'labels' => $labels, 'filedNotShow' => $unsetFiled, 'action' => $action, 'paginate' => $paginate]);
    }
    public  function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'name' => 'required',
                'status' => 'required',
            ]);

            $pages = new Pages;
            $pages->name = $request->name;
            $pages->url = url($request->name);
            $pages->show_front = "1";
            $pages->status = $request->status;

            if ($pages->save()) {
                Sweetalert::success('Page Inserted Successfully')->autoclose(2000);
                return redirect('admin/pages');
            }
        }
    }
    public  function edit(Request $request)
    {
        $pages = Pages::find($request->id);
        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'name' => 'required',
                'status' => 'required',
            ]);

            $pages->name = $request->name;
            $pages->url = url($request->name);
            $pages->show_front = $request->show_front;
            $pages->status = $request->status;

            if ($pages->update()) {
                Sweetalert::Success('Page Updated Successfully..')->autoclose(2000);
                return redirect('admin/pages');
            }
        }
        return view('pages.edit')->with('data', $pages);
    }
    public  function delete(Request $request)
    {
        Pages::find($request->id)->delete();
        Sweetalert::Success('Page Delete Successfully...')->autoclose(2000);
        return back();
    }

    public  function profile(Request $request)
    {
        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'email' => 'required',
                'name' => 'required',

            ]);
            if ($request->confirmPassword) {
                $request->validate([
                    'password' => 'required',
                    'confirmPassword' => 'required|same:password'
                ]);
            }

            $userId =  Auth::user()->id;

            $user = User::find($userId);
            $user->email =  $request->email;
            $user->name =  $request->name;
            if ($request->confirmPassword) {
                $user->password = Hash::make($request->password);
            }
            if ($user->update()) {
                Sweetalert::Success('Profile has been Update Successfully...')->autoclose(2000);
                return redirect('admin/dashboard');;
            }
        }
    }
}
