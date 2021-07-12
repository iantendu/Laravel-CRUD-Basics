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
                    Update User Details
                </div>
                <div class="card-body p-5">
                    <form method="POST" action="/edit/save">
                        @if (isset($success)){
                            <p>{{ $success }}</p>
                            }

                        @endif
                        @csrf
                        <input type="text" name="id" id="" hidden value="{{ $user[0]->id }}">
                        <div class="form-group">
                            <label for="names">Full Names</label>
                            <input type="text" name="fullnames" id="" class="form-control"
                                value="{{ $user[0]->fullnames }}">
                        </div>
                        <div class="form-group">
                            <label for="names">ID Number</label>
                            <input type="text" name="id_number" id="" class="form-control"
                                value="{{ $user[0]->id_number }}">
                        </div>
                        <div class="form-group">
                            <label for="names">Date of Birth</label>
                            <input type="text" name="dob" class="form-control" value="{{ $user[0]->dob }}">
                        </div>
                        <button class="btn btn-primary">Update Information</button>



                    </form>
                </div>
            </div>
        </div>

    </div>




</body>

</html>
