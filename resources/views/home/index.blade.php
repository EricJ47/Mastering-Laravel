@extends('layouts.master')

@section('content')
<main role="main" class="container">

    <div class="row mt-5">
        {{-- @foreach ($blogs as $item) --}}
        @for ($i = 0; $i < count($blogs); $i++)
        @if ($blogs[$i]['status'] == 1)
            
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

    @php
        $data = '';
    @endphp

{{-- isset testing --}}
    {{-- @isset($data)
    <div class="alert alert-success">succes</div>
        
    @endisset --}}

{{-- switch case --}}
    {{-- @switch($data)
        @case(1)
        <div class="alert alert-success">succeed</div>
            @break
        @case(2)
        <div class="alert alert-danger">failed</div>
            @break
        @default
        <div class="alert alert-warning">warning</div>
    @endswitch --}}

@empty($data)
<div class="alert alert-success">Empty</div>    
@endempty
</main>
    @endsection