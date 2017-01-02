@extends('admin.layout')

@section('title')
    {{ $berita->title }}
@endsection

@section('content')

    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">{{ $berita->title }}</h1>
                    </div>
                    <div class="panel-body">
                        <br>
                        <p>{{ $berita->body }}</p>
                        <br><br>
                        <br><br>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (!$berita)

                        @else

                        @endif
                    </div>
                    <div class="panel-body">
                            oleh: <br>
                            <strong><big>{{ $berita->user->name }}</big></strong>
                            <br>
                            <strong>{{ $berita->updated_at->diffForHumans() }}</strong>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

@endsection
