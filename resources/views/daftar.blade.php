@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/daftar') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hp" class="col-md-4 control-label">No. HP</label>
                            <div class="col-md-6">
                                <input id="hp" type="phone" class="form-control" name="hp" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="divisi" class="col-md-4 control-label">Divisi</label>
                            <div class="col-md-6">
                                <select name="divisi" id="divisi" class="form-control">
                                    <option value="" >Pilih Divisi</option>
                                    @foreach ($divisis as $divisi)
                                        <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alasan" class="col-md-4 control-label">Alasan</label>
                            <div class="col-md-6">
                                <textarea rows="15" name="alasan" id="alasan" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" name="name" value="Daftar" class="btn btn-primary">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

</div>
@endsection
