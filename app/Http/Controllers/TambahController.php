<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TambahController extends Controller
{
    //TAMBAHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH
    public function create()
    {
        return view('Tambah');
    }

    public function store(Request $request)
    {
        Task::create([
            'mapel' => $request->mapel,
            'tugas' => $request->tugas,
            'uploadto' => $request->uploadto,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,

            $request->validate([
                'mapel' => 'required',
                'tugas' => 'required'
            ])
        ]);
        return redirect('/');
    }
    //UPDATEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
    public function edit(Task $task)
    {
        return view('Edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'mapel' => $request->mapel,
            'tugas' => $request->tugas,
            'uploadto' => $request->uploadto,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline
        ]);
        return redirect('/');
    }
    //HAPUSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
    public function destroy(Task $task)
    {
        $task->delete();
        // return redirect('/');
        return back();
    }
    //VALDASIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
}
 //Tambah dataaaaaaaaaa
//  public function create()
//  {
//      return view('Tambah');
//  }

//  public function store(Request $request)
//  {
//      Task::create([
//          'mapel' => $request->mapel,
//          'tugas' => $request->tugas,
//          'uploadto' => $request->uploadto,
//          'deskripsi' => $request->deskripsi,
//          'deadline' => $request->deadline
//      ]);
//      return redirect('/');
//  }
 
//  public function edit(Task $task)
//  {
//      return view('Tambah', compact('task'));
//  }
//  public function update(Request $request, Task $task)
//  {
//      $task->update([
//          'mapel' => $request->mapel,
//          'tugas' => $request->tugas,
//          'uploadto' => $request->uploadto,
//          'deskripsi' => $request->deskripsi,
//          'deadline' => $request->deadline
//      ]);
//  }