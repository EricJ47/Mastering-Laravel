
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


{{-- retriving data relasi --}}

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