@extends('admin.layout')

@section('title')
    Edit Berita
@endsection

@section('content')
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Berita</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="" method="post">
            {{ csrf_field() }}
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <input required="required" value="{{ $berita->title }}" placeholder="Tulis judul" type="text" name = "title"class="form-control" />
            @if ($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
          </div>
          <div class="form-group">
            <textarea name="body" class="form-control" rows="15">{{ $berita->body }}</textarea>
          </div>
          <input type="hidden" name="id" value="{{$berita->id}}">
          <input type="submit" name='publish' class="btn btn-success" value = "Publikasikan"/>
        </form>

    </div>
    <!-- /.box -->

@endsection
