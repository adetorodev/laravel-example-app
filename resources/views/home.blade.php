@extends('layout.master')

@section('content')
   <main role='main' class="contianer">
    @if ($errors->any())
        @foreach($error->all() as $error)
            <div class="alert alert-danger">{{$errors}}</div>
        @endforeach
    @endif
   <form action="{{route("upload")}}" entype="multipart/form-data">
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
