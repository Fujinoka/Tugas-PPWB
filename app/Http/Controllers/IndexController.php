<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class IndexController extends Controller
{
    //View
    public function index()
    {
        $tasks = Task::all();
        return view('Index', compact('tasks'));
    }

    // public function create()
    // {
    //     return view('Tambah');
    // }
}
