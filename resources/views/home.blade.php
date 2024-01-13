@extends('layout.master')

@section('content')
   <main role='main' class="contianer">
    <image src="{{assets(storage/app/public/images/)}}" alt=''>
   <form action="{{route("upload-file")}}" entype="multipart/form-data">
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
