<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tutorials</title>
</head>

<body>
    <div class="container">
        <div class="m-5">
            <h4 class="alert alert-success">Welcome to Model and CRUD in Laravel</h4>
        </div>
        <div class="col-sm-9 m-5">
            <div class="card">
                <div class="card-header">
                    Enter User Details
                </div>
                <div class="card-body p-5">
                    <form method="POST" action="save">
                        @if (isset($success)){
                            <p>{{ $success }}</p>
                            }

                        @endif
                        @csrf

                        <div class="form-group">
                            <label for="names">Full Names</label>
                            <input type="text" name="fullnames" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="names">ID Number</label>
                            <input type="text" name="id_number" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="names">Date of Birth</label>
                            <input type="text" name="dob" id="" class="form-control">
                        </div>
                        <button class="btn btn-primary">Save Information</button>
                        @if (isset($data))
                            <table class="table mt-5">
                                <thead>
                                    <tr>
                                        <th>Names</th>
                                        <th>Date of Birth</th>
                                        <th>ID Number</th>
                                        <th>Date Created</th>
                                        <th>Options</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->fullnames }}</td>
                                            <td>{{ $item->dob }}</td>
                                            <td>{{ $item->id_number }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="/edit/{{ $item->id }}">Edit</a> |
                                                <a href="/delete/{{ $item->id }}">Delete</a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    <tr>

                                    </tr>
                                </tbody>

                            </table>

                        @endif
                    </form>
                </div>
            </div>
        </div>

    </div>




</body>

</html>
