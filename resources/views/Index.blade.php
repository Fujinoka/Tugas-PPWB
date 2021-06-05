@extends('Layouts.App')
@section('title', 'Index')
@section('header')
    <div class="">
        <h1 class="container-fluid changecolor navbar-brand">Tabel Tugas</h1>
    </div>  
@endsection
@section('content')
    <div class="">
        <div class="list-group">
            <div class="list-group-item">
                <h4 class="changecolor">Tabel Tugas</h4>
            <div class="d-flex justify-content-between">
                <div class="input-group">
                    <div class="form-outline">
                        <input class="form-control" type="search" id="searchform">
                    </div>
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
                <a class="btn btn-primary" href="/Tambah">  Tambah</a>
            </div>
            </div>
                <div class="table-responsive-md">
                    <table class="table table-sm table-bordered  table-hover "> 
                        <thead class="thead-white">
                            <tr class="text-center">
                                <th class="col-0" scope="col"><i class="bi bi-list-check"></i></th>
                                <th class="col-2" scope="col">Mapel</th>
                                <th class="col-3" scope="col">Tugas</th>
                                <th class="col-1" scope="col">Upload</th>
                                <th class="col-4" scope="col">Deskripsi</th>
                                <th class="col-1" scope="col">Deadline</th>
                                <th class="col-2" colspan="2" scope="colgroup">Control</th>
                            </tr>
                            
                        </thead>
                        <tbody class="table-white">
                            @forelse ($tasks as $task)
                            <tr class="">
                                <td class="col-0" scope="row"><input type="checkbox"></td>
                                <td class="col-2" scope="row">{{ $task->mapel }}</td>
                                <td class="col-4" scope="row">{{ $task->tugas }}</td>
                                <td class="col-1" scope="row">{{ $task->uploadto }}</td>
                                <td class="col-4" scope="row">{{ $task->deskripsi }}</td>
                                <td class="col-1" scope="row">{{ $task->deadline }}</td>
                                <td class="col-1" scope="row">
                                    <a class="btn btn-sm btn-warning col" href="{{ route('task.edit', $task->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        {{-- <a href="{{ route('task.edit', $task->id) }}">Ubah</a> --}}
                                        {{-- <form action="{{ route('task.destroy', $task->id) }}" method="delete">
                                            @csrf
                                            <button type="submit" name="_method" value="DELETE">Hapus</button>
                                            <a href="{{ route('task.destroy', [$task->id]) }}" name=>Hapus</a>
                                        </form> --}}
                                        
                                </td>
                                <td class="col-1" scope="row">
                                    <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger col" type="submit" ><i class="bi bi-trash"></i></button>
                                            
                                            {{-- <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Hapus"></td> --}}
                                    </form> 
                                </td>
                            </tr>
                            @empty
                            <tr style="text-align:center;">
                                <td colspan="7">
                                    <h1>Nda ada data hahaha</h1>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
        </div>
    </div> 
@endsection