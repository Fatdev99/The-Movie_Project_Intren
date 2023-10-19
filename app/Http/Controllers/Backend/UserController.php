<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct(){

    }


    /**
     * Display a registration form.
     */
    public function register(){
        return view('backend.auth.register');
    }


    /**
     *  Select all user.
     *
     */
    public function Index(){
        // lấy ra 10 user per page
        $users = User::paginate(10);
        //$users = User::all();
        //dd($users);

        // trả về view hiển thị danh sách user
        return view('backend.dashboard.userindex', compact('users'));

    }


    /**
     * Store a new user.
     *
     */
    public function store(StoreUserRequest $request){

        $user = User::create($request->validated());

        if ($user){
            return redirect()->route('movie.index')->with('success', "Đăng kí tài khoản thành công");
        }

        return redirect()->route('movie.register')->with('error', "Đăng kí tài khoản không thành công");
    }

    /**
     * Delete user.
     *
     */
    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $users = User::findOrFail($id);

        if ($users->delete() === false) {

            return redirect()->with('error', 'Xoá tài khoản không thành công');
        }

        return redirect()->route('movie.dashboard.user')->with('success', 'Xoá tài khoản thành công');
    }

    /**
     * Find user by id.
     *
     */
    public function edit($id){
        $users = User::findOrFail($id);

        return view('backend.dashboard.userupdate', compact('users'));
    }


    /**
     * Update user.
     *
     */
    public function update(UpdateUserRequest $request, $id){
        //dd($id);
        $users = User::findOrFail($id);
        
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
        $users->email = $request->input('email');
        
        $data = $users->update();
        //dd($data);
        
        return redirect()->route('movie.dashboard.user')->with('success', 'Cập nhật thông tin tài khoản thành công');
    }

    public function search(Request $request){
        $search = User::whereName($request->input('searchname'))->get();
        //dd($search);

        return view('backend.dashboard.userindex', compact('search'));

    }
}

