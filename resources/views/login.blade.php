@extends('layout.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <h1 class="md-4">Login</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.summit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Password</label>
                        <input name="password" type="text" class="form-control">
                    </div>
                    <button type="summit" class="btn btn-primary">Summit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection