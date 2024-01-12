@extends('layout.master')

@section('content')
   <main role='main' class="contianer">
   <form action="{{route("upload-file")}}" method="POST" entype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Upload</label>
        <input type="file" name="image" class="form-control" >
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success mt-2">Submit</button>
    </div>
   </form>
   </main>
@endsection
