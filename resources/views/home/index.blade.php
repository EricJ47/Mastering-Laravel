@extends('layouts.master')

@section('content')
<main role="main" class="container">

    <div class="row mt-5">
        {{-- @foreach ($blogs as $item) --}}
        @for ($i = 0; $i < count($blogs); $i++)
        @if ($blogs[$i]['status'] == 'published')
            
        <div class="col-md-4">
            
            <div class="card">
                <div class="card-body">
                    <h2>{{$blogs[$i]['title']}}</h2>
                    <p>{{$blogs[$i]['content']}}</p>
                    <div class="btn btn-success btn-sm"> Status: {{$blogs[$i]['status']}}</div>
                </div>
            </div>
        </div>
        {{-- @else
        <div class="col-md-4">
            
            <div class="card">
                <div class="card-body">
                    <h2>{{$blogs[$i]['title']}}</h2>
                    <p>{{$blogs[$i]['content']}}</p>
                    <div class="btn btn-warning btn-sm"> Status: {{$blogs[$i]['status']}}</div>
                </div>
            </div>
        </div> --}}
        @endif
        @endfor
        {{-- @endforeach --}}
    </div>
</main>
    @endsection