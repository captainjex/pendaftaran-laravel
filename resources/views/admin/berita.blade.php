@extends('admin.layout')

@section('title')
    Berita
@endsection

@section('content')
    <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title"></h3>
            <a href="/tambah-berita" class="btn btn-primary btn-lg "><i class="fa fa-plus"></i> buat berita</a>
             <div class="box-tools">
               <div class="input-group input-group-sm" style="width: 150px;">
                 <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                 <div class="input-group-btn">
                   <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                 </div>
               </div>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body table-responsive no-padding">
             <table class="table table-hover">
               <tr class="bg-gray">
                 <th>judul</th>
                 <th>isi</th>
                 <th>author</th>
                 <th>dibuat</th>
                 <th>diupdate</th>
                 <th colspan="2" class="text-center">opsi</th>
               </tr>
               @foreach ($beritas as $berita)
                   <tr>
                       <td><a href="/berita/{{ $berita->slug }}">{{ $berita->title }}</a></td>
                       <td>{{ str_limit($berita->body, 60) }}</td>
                       <td>{{ $berita->user->name }}</td>
                       <td>{{ $berita->created_at->diffForHumans() }}</td>
                       <td>{{ $berita->updated_at->diffForHumans() }}</td>
                       @if (Auth::check())
                           @if ($berita->user_id == Auth::user()->id)
                               <td class="text-center"><a href="{{ route('berita.edit', $berita->slug) }}" class="btn btn-info btn-flat"><i class="fa fa-edit"></i> Edit</a></td>
                           @else
                               <td class="text-center"><a href="{{ route('berita.edit', $berita->slug) }}" class="btn btn-info btn-flat disabled"><i class="fa fa-edit"></i> Edit</a></td>
                           @endif
                       @endif
                       <td class="text-center"><a href="/berita/hapus/{{ $berita->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a></td>
                   </tr>
               @endforeach
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
     </div>

@endsection
