@extends('layouts.app')

@section('content')
<div class="wrapper">


    <div class="header header-filter" style="background-image: url('https://pradanasinduaji.files.wordpress.com/2013/03/856216_331489643638302_1115281958_o.jpg');background-size: cover;background-repeat: no-repeat;">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default main-raised main">
                    <div class="panel-heading">Daftar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/daftar') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="nama" class="control-label"><h3>Nama</h3></label>
                                    <input id="nama" type="text" class="form-control" name="nama" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="email" class="control-label"><h3>Email</h3></label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="hp" class="control-label"><h3>No. HP</h3></label>
                                    <input id="hp" type="phone" class="form-control" name="hp" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="divisi" class="control-label"><h3>Divisi</h3></label>
                                    <select name="divisi" id="divisi" class="form-control select2" style="width: 100%;">
                                        <option value="" disabled="disabled" selected="selected">Pilih Divisi</option>
                                        @foreach ($divisis as $divisi)
                                            <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="alasan" class="control-label"><h3>Alasan</h3></label>
                                    <textarea rows="5" name="alasan" id="alasan" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" name="name" value="Daftar" class="btn btn-primary btn-flat center">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
