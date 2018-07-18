<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // $users = User::orderBy('created_at','asc')->paginate(10)->except(Auth::id());
    //     // $users = User::orderBy('created_at','asc')->paginate(2);
    //     // $users = User::orderBy('created_at','asc')->get()->except(Auth::id());
    //     // $users = User::orderBy('created_at','asc')->get()->paginate(2)->except(Auth::id());
    //     $users = User::where('role', '!=', 'admin')->orderBy('created_at','asc')->paginate(10);
    //     return view('users.index')->with('users', $users);
    // }
    public function index()
    {
        return view('users.index');
    }

    // Datatable
    public function indexData()
    {   
        $users = User::where('role', '!=', 'admin');
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '
                    <a href="/users/show/'.$user->id.'" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i> View</a>
                    <a href="/users/edit/'.$user->id.'" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                ';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit')->with('user', $user);
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
        // validate
        $this->validate($request, [
            'name' => 'required',
        ]);

        // update user
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        if($request->role != ''){
            $user->role = $request->input('role');
        }
        $user->save();

        // redirect after update
        return redirect('/users')->with('success','Successfully updated user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // delete user
        $user = User::find($id);
        $user->delete();
        
        // redirect user after deletion
        return redirect('/users')->with('success','Successfully deleted user');
    }
}
