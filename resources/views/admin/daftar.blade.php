@extends('admin.layout')

@section('title')
    Daftar Peserta
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
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
                        <th>daftar pada</th>
                        <th>diperiksa oleh</th>
                        <th>diperiksa pada</th>
                        <th>pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pesertas as $peserta)
                        <tr>
                            <td>{{ $peserta->id }}</td>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>{{ $peserta->hp }}</td>
                            <td>{{ $peserta->divisi->nama }}</td>
                            <td>{{ $peserta->created_at->diffForHumans() }}</td>
                            @if (!$peserta->diperiksa_oleh)
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">&nbsp;belum</a> </td>
                                <td class="bg-danger"><span>belum diperiksa</span></td>
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">Periksa</a></td>
                            @else
                                <td class="bg-success text-center">{{ $peserta->user->name }}</td>
                                <td class="bg-success">{{ $peserta->updated_at->diffForHumans() }}</td>
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-primary btn-block">Lihat</a></td>
                            @endif
                            {{-- <td>{{ $peserta->diperiksa_oleh}}</td> --}}

                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>divisi</th>
                        <th>daftar pada</th>
                        <th>diperiksa oleh</th>
                        <th>diperiksa pada</th>
                        <th>pilihan</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->



@endsection
