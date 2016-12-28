@extends('admin.layout')

@section('title')
    Periksa
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">{{ $peserta->id}} - {{ $peserta->nama }}</h1>
                    </div>
                    <div class="panel-body">
                        nama: <br>
                        <p><strong>{{ $peserta->nama }}</strong></p>
                        <br><br>
                        email: <br>
                        <p><strong>{{ $peserta->email }}</strong></p>
                        <br><br>
                        no. hp: <br>
                        <p><strong>{{ $peserta->hp }}</strong></p>
                        <br><br>
                        divisi: <br>
                        <p><strong>{{ $peserta->divisi->nama }}</strong></p>
                        <br><br>
                        alasan: <br>
                        <p><strong>{{ $peserta->alasan }}</strong></p>
                        <br><br>
                    </div>
                    <div class="panel-footer">
                        <form class="" action="" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$peserta->id}}">
                            <input type="hidden" name="diperiksa_oleh" value="{{ Auth::user()->id }}">
                            <input type="submit" name='publish'  value = "Periksa" class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if (!$peserta->diperiksa_oleh)

                        @else

                        @endif
                    </div>
                    <div class="panel-body">
                        mendaftar pada:<br>
                        <strong>{{ $peserta->created_at->diffForHumans() }}</strong>
                        <br><br>
                        @if (!$peserta->diperiksa_oleh)
                            <div class="alert alert-danger" role="">Belum diperiksa</div>
                            {{-- <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">belum</a> </td>
                            <td class="bg-danger"><span>belum diperiksa</span></td>
                            <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">Periksa</a></td> --}}
                        @else
                            diperiksa oleh: <br>
                            <strong><big>{{ $peserta->user->name }}</big></strong>
                            <br>
                            <strong>{{ $peserta->updated_at->diffForHumans() }}</strong>
                            <br><br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
