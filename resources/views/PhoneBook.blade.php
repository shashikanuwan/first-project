<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body><br>

    <div class="container">
        <div class="text-center">
            <h1> Phone Book</h1><br>


            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach


            <div class="row">
                <div class="col-md-6">
                    <form action="/Phone-Book_Save" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone_number" placeholder="Enter Your Phone Number">
                        </div>

            </div><br>
                        <div class="form-group">
                            <div class="col-md-12" >
                                <input type="submit" class="btn btn-primary" value="Save" name="submit">
                                <input type="button" class="btn btn-warning" value="Clear" name="clear">
                            </div>
                        </div>
            </form><br><br>
            <hr color="yellow"><hr>

                <div class="form-group">
                    <div class="col-md-12" >
                        <a href="/" class="btn btn-success">Home</a>
                        <a href="/PhoneBook" class="btn btn-success"> Back </a>

                    </div>
                </div>

                <div class="col-md-12">
                <div class="row">
                    <table class="table table-dark" border="5">

                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Phone Number Work</th>
                        <th>Action</th>
                        <th></th>

                        @foreach($lists as $see)
                        
                        <tr>
                            <td>{{$see->id}}</td>
                            <td>{{$see->name}}</td>
                            <td>{{$see->phone_number}}</td>
                            <td>
                            @if($see->phone_number_work)

                                <button class="btn btn-warning">Phone Number is Not Working</button>
                            @else
                                <button class="btn btn-success">Phone Number is Working</button>
                            @endif
                            </td>
                            <td>
                            @if($see->phone_number_work)

                                <a href="/work/{{$see->id}}" class="btn btn-primary">Phone Number Working</a>
                            @else
                                <a href="/notwork/{{$see->id}}" class="btn btn-danger">Phone Number is Not Working</a>
                            @endif

                            </td>
                            <td>
                                <a href="/deletework/{{$see->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updatework/{{$see->id}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
