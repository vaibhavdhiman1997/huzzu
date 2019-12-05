<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="col">
            <div class="col-lg-4 m-auto">
                <h2>Registration Form</h2>
                <form action="reg.php" method="post" class="form-group">
                    <div>
                        <label for=""><b>Name</b></label>
                        <input type="text" name="Uname" id="" class="form-control" required>
                    </div>
                    <div>
                        <label for=""><b>Email</b></label>
                        <input type="text" name="Uemail" id="" class="form-control" required>
                    </div>
                    <div>
                        <label for=""><b>Contact Number</b></label>
                        <input type="number" name="UContactNo" id="" class="form-control" required>
                    </div>
                    <div>
                        <label for=""><b>Password</b></label>
                        <input type="password" name="Upass" id="" class="form-control" required>
                    </div>
                    <div>
                        <label for=""><b>Confirm Password</b></label>
                        <input type="password" name="UConfirmpass" id="" class="form-control" required>
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Submit" class="btn btn-outline-primary" name="SignUp">
                        <input type="reset" value="Reset" class="btn btn-outline-success mx-2">
                        <a href="login.php" class="btn btn-outline-danger">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>