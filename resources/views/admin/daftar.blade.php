@extends('admin.layout')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>divisi</th>
                        <th>alasan</th>
                        <th>diperiksa oleh</th>
                        <th>created</th>
                        <th>updated</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>
                    @foreach ($pesertas as $peserta)
                        <td>{{ $peserta->id }}</td>
                        <td>{{ $peserta->nama }}</td>
                        <td>{{ $peserta->email }}</td>
                        <td>{{ $peserta->hp }}</td>
                        <td>{{ $peserta->divisi->nama }}</td>
                        <td>{{ $peserta->alasan }}</td>
                        <td>{{ $peserta->diperiksa_oleh}}</td>
                        <td>{{ $peserta->created_at->diffForHumans() }}</td>
                        <td>{{ $peserta->updated_at->diffForHumans() }}</td>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>divisi</th>
                        <th>alasan</th>
                        <th>diperiksa oleh</th>
                        <th>created</th>
                        <th>updated</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection
