<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body><br><br>

<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="text-center">
                <h1>Update Phone Book</h1><br>
            </div>  
            <form action="/update" method="POST">
            {{csrf_field()}}
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{$update->name}}"><br>
                    <input type="text" class="form-control" name="phone_number" value="{{$update->phone_number}}">  
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$update->id}}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" class="btn btn-warning"value="Update">
                    <input type="butten" class="btn btn-danger"value="Cancel">
                </div>
            </div>
        </div>
    </form>
</div>
    
</body>
</html>