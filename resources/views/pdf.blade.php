<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All user data to pdf</title>
    </head>
    <body>
        <div class="container">
            <h2>All User data to Pdf</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>crated at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->name }}</td>
                            <td>{{ $blog->email }}</td>
                            <td>{{ $blog->creted_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
