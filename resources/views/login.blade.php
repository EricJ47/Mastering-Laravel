@extends('layouts.master')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-2 text-center">Login</h2>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{ $error }}</div>
                    
                @endforeach
                
            @endif
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf  
                        <div class="mb-2">
                            <label for="" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="password"  name="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
