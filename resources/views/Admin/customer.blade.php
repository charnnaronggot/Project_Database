<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
    <div class="card-body">
        <form action="" method="post">
           @csrf
            <div class="form-group">
                <label for="department_name">ชื่อแผนก</label>
                <input type="text" class="form-control" name="department_name">
            </div>
            @error('department_name')
            <div class="my-2">
                <span class="text-danger">{{$message}}</span>
            </div>
            @enderror
            <br>
                <input type="submit" value="บันทึก" class="btn btn-primary">
        </form>
    </div>
</html>