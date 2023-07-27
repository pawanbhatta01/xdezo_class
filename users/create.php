<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>
    <div class="container my-5 py-5 col-6">
        <h1 class="text-center">Add User</h1>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($name != "" && $email != "" && $password != "" && $confirm_password != "") {
                if ($password == $confirm_password) {
                } else {
        ?>
        <div class="alert alert-danger" role="alert">
            Password should match with confirm password.
        </div>
        <?php
                }
            } else {
                // echo '<div class="alert alert-danger" role="alert">All fields are required.</div>';
                ?>
        <div class="alert alert-danger" role="alert">
            All fields are required.
        </div>
        <?php
            }
        }
        ?>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    aria-describedby="passwordHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1"
                    aria-describedby="passwordHelp">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>