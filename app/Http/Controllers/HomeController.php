<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Facades\Auth;
use App\Author;

class HomeController extends Controller
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
        if(Laratrust::hasRole('admin')) return $this->adminDashboard();
        if(Laratrust::hasRole('member')) return $this->memberDashboard();
    }

    protected function adminDashboard()
    {
        $authors = [];
        $books = [];
        foreach(Author::all() as $author) {
            array_push($authors, $author->name);
            array_push($books, $books->count());
        }

        return view('dashboard.admin',compact('authors','books'));
    }

    protected function memberDashboard()
    {
        $borrowLogs = Auth::user()->borrowLogs()->borrowed()->get();
        return view('dashboard.member', compact('borrowLogs'));
    }
}
