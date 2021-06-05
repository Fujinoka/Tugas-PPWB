@extends('Layouts.App')
@section('title', 'Tambah')
@section('header')
    <div class="">
        <h1 class="changecolor navbar-brand">Tabel Tugas</h1>
    </div>  
@endsection
@section('content')
    <div class="container">
        {{-- @if ($task->exists)
         <form method="put" action="{{ route('task.update', $task)}}">   
        @else
        
        @endif --}}
        {{-- @php
            $action = '{{ route('task.store') }}'
            if (!empty($task)) $action =  '{{route('task.edit', $task->id)}}'
        @endphp --}}
        <form  method="post" action="{{ route('task.store') }}">
            @csrf
            <div class="">
                <div class="form-group ">
                    <label class="badge badge-info" style="font-size: 18px;" for="mapel">Mapel</label>
                    <input style="background-color: lightgray; border-color: grey;" class="form-control" type="text" name="mapel" id="mapel">
                </div>
                <div class="form-group">
                    <label class="badge badge-info" style="font-size: 18px;" for="tugas">Tugas</label>
                    <input style="background-color: lightgray; border-color: grey;" class="form-control" type="text" name="tugas" id="tugas">
                </div>
                <div class="form-group">
                    <label class="badge badge-info" style="font-size: 18px;" for="uploadto">Upload</label>
                    <input style="background-color: lightgray; border-color: grey;" class="form-control" type="text" name="uploadto" id="uploadto">
                </div>    
                    <div class="form-group">
                    <label class="badge badge-info" style="font-size: 18px;" for="deskripsi">Deskripsi</label>
                    <textarea style="background-color: lightgray; border-color: grey;" class="form-control" name="deskripsi" id="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label class="badge badge-info" style="font-size: 18px;" for="deadline">Deadline</label><br/>
                    <input style="background-color: lightgray;n border-color: grey;  " class="form-control" type="date" name="deadline" id="deadline">
                </div>
                <div>
                    
                     
                </div>
                <div class="form-group d-flex justify-content-end">
                    <a class="btn btn-warning" href="/">Kembali</a>
                    <button type="submit" class="btn btn-success ms-4">Simpan</button>
                </div>
            </div>    
        </form>
    </div>

@endsection