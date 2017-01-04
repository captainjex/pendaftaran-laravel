<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All user data to pdf</title>
    </head>
    <body>
        <div class="container">
            <h2>Data Pendaftar</h2>
            <table width="100%" border="1">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>divisi</th>
                        <th>tgl daftar</th>
                        <th>diperiksa oleh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->nama }}</td>
                            <td>{{ $blog->email }}</td>
                            <td>{{ $blog->hp }}</td>
                            <td>{{ $blog->mama }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>{{ $blog->nana }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
