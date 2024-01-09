@extends('layout.master')

@section('content')
   <main role='main' class="contianer">
    <div class="col-mt-5">
        @foreach($users as $user)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4>Name: {{$user->name}}</h4>
                    <p>Email: {{$user->email}}</p>
                    <p>Address: {{$user->address->address}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   </main>
@endsection
