@extends('admin.layout')

@section('title')
    Tambah Berita
@endsection

@section('content')
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="/tambah-berita" method="post">
            {{ csrf_field() }}
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <input required="required" value="{{ old('title') }}" placeholder="Tulis judul" type="text" name = "title"class="form-control" />
            @if ($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
          </div>
          <div class="form-group">
            <textarea name="body" class="form-control" rows="15">{{ old('body') }}</textarea>
          </div>
          <input type="submit" name='publish' class="btn btn-success" value = "Publikasikan"/>
        </form>

    </div>
    <!-- /.box -->

@endsection
