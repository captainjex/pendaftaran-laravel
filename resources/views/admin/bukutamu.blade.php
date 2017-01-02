@extends('admin.layout')

@section('title')
    Buku Tamu
@endsection

@section('content')
    <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title"></h3>

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
                 <th>nama</th>
                 <th>email</th>
                 <th>pesan</th>
                 <th>waktu</th>
               </tr>
               @foreach ($tamus as $tamu)
                   <tr>
                       <td>{{ $tamu->nama }}</td>
                       <td>{{ $tamu->email }}</td>
                       <td>{{ $tamu->pesan }}</td>
                       <td>{{ $tamu->created_at->diffForHumans() }}</td>
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
