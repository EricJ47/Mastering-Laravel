@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            @foreach ($posts as $post)
                {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Name : {{$user->name}}</h4>
                        <h4>Email: {{$user->email}}</h4>
                        <h4>Adress : {{$user->adress->address}}</h4>
                        <h4>phone: {{$user->adress->phone}}</h4>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Name : {{$adress->user->name}}</h4>
                        <h4>Email: {{$adress->user->email}}</h4>
                        <h4>Adress : {{$adress->address}}</h4>
                        <h4>phone: {{$adress->phone}}</h4>
                    </div>
                </div>
            </div> --}}

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>title: {{ $post->title }}</h4>
                            <h4>description: {{ Str::words($post->content, 5, '...') }}</h4>
                            <ul>
                            @foreach ($post->tags as $tag )
                                <li>{{$tag->name}}</li>

                                
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
