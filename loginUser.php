<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container{
            width:30%;
            margin-top: 20px;
            box-shadow: 0px 3px 20px rgba(0,0,0,0.3);
            padding:40px;
        }
        h1{
            padding:50px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Halaman Login</h1>
    <div class="container ">
        <form method = "post" action="loginProccess.php">
            <div class="col mb-4">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
            </div>
            <div class="col mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
            <button type="submit" class="btn btn-primary" name="login" value="login">Kembali</button>
            </div>
    </form>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>