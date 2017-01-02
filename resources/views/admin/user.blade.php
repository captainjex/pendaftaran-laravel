@extends('admin.layout')

@section('title')
    Daftar User
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
            <a href="/tambahuser" class="btn btn-primary btn-lg "><i class="fa fa-user-plus"></i></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>email</th>
                        <th>created at</th>
                        <th>kuasa</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            @if ($user->admin == 0)
                                <td class="text-center">user</td>
                            @elseif ($user->admin == 1)
                                <td class="text-center">admin</td>
                            @endif
                            <td class="text-center"><a href="/hapususer/{{$user->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-flat"><i class="fa fa-user-times"></i> Hapus</a></td>
                        </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>nama</th>
                        <th>email</th>
                        <th>created at</th>
                        <th>kuasa</th>
                        <th> </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

<script>
    function konfirmhapus(){
          var x = confirm("Are you sure you want to delete?");
          if (x)
              return true;
          else
            return false;
    }
</script>

@endsection
