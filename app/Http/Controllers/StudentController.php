<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Minotaur\Http\Requests;
use Minotaur\Models\User;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('students.list-students')->with('data',$data);
    }

    public function addUser()
    {
        return view('students.add');
    }

    public function storeUser(Request $request)
    {
        $userData = json_encode( $request->getContent() );
        dd($userData);

    }

    public function searchUser(Request $request)
    {
        return view('students.search-students');

    }

    public function listUsers(Request $request)
    {
        $userData = json_encode( $request->getContent() );

    }

    public function showDocs()
    {
        return view('students.show-docs');

    }
}
