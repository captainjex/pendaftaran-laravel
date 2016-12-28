@extends('admin.layout')

@section('title')
    Daftar Peserta
@endsection

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
                        <th>created at</th>
                        <th>updated at</th>
                        <th>tombol</th>
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
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                        <td>C</td>
                        <td>C</td>
                        <td>C</td>
                        <td>C</td>
                        <td>C</td>
                    </tr>
                    @foreach ($pesertas as $peserta)
                        <tr>
                            <td>{{ $peserta->id }}</td>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>{{ $peserta->hp }}</td>
                            <td>{{ $peserta->divisi->nama }}</td>
                            <td>{{ $peserta->alasan }}</td>
                            @if (!$peserta->diperiksa_oleh)
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">belum</a> </td>
                            @else
                                <td><a href="" class="btn btn-success btn-block">{{ $peserta->user->name }}</a> </td>
                            @endif
                            {{-- <td>{{ $peserta->diperiksa_oleh}}</td> --}}
                            <td>{{ $peserta->created_at->diffForHumans() }}</td>
                            <td>{{ $peserta->updated_at->diffForHumans() }}</td>
                            @if (!$peserta->diperiksa_oleh)
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-danger btn-block">Periksa</a></td>
                            @else
                                <td><a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-primary btn-block">Periksa</a></td>
                            @endif

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
                        <th>alasan</th>
                        <th>diperiksa oleh</th>
                        <th>created at</th>
                        <th>updated at</th>
                        <th>tombol</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->



@endsection
