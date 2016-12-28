@extends('admin.layout')

@section('title')
    Periksa
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">{{ $peserta->id}} - {{ $peserta->nama }}</h1>
                    </div>
                    <div class="panel-body">
                        nama: <br>
                        <strong>{{ $peserta->nama }}</strong>
                        <br><br>
                        email: <br>
                        <strong>{{ $peserta->email }}</strong>
                        <br><br>
                        no. hp: <br>
                        <strong>{{ $peserta->hp }}</strong>
                        <br><br>
                        divisi: <br>
                        <strong>{{ $peserta->divisi->nama }}</strong>
                        <br><br>
                        alasan: <br>
                        <strong>{{ $peserta->alasan }}</strong>
                        <br><br>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (!$peserta->diperiksa_oleh)
                            <td> belum </td>
                        @else
                            <td>edit</td>
                        @endif
                    </div>
                    <div class="panel-body">
                        mendaftar pada:<br>
                        <strong>{{ $peserta->created_at->diffForHumans() }}</strong>
                        <br><br>
                        update terakhir: <br>
                        <strong>{{ $peserta->updated_at->diffForHumans() }}</strong>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
