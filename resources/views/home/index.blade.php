@extends('layouts.master')

@section('content')
    <main role="main" class="container">

       
        <img src="{{ asset('/storage/images/new_image.jpg') }}" alt="" class="img-fluid">
        <div class="col-md-5 offset-md-3 mt-5">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger"> {{ $error }}</div>
                
            @endforeach
            
        @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">upload</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="{{ route('download')}}" class="btn btn-success  mt-2">Downlaod</a>
        </div>

    </main> 
@endsection
