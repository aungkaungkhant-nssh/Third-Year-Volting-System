<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCSL Volting System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
        width: 90%;
        max-width: 400px;
        margin: 140px auto;
 }
 </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>
         <?php if ( isset($_GET['incorrect']) ) : ?>
            <div class="alert alert-warning">
                Incorrect Phone or Password
            </div> 
        <?php endif ?>
        <form action="actions/login.php" method="post">
            <input 
                type="text" name="phone" 
                class="form-control mb-2" 
                placeholder="Phone" required
            >
            <input 
                type="password" name="password" 
                class="form-control mb-2" 
                placeholder="Password" required
            >
            <button type="submit" 
                class="w-100 btn btn-lg btn-primary">
                Login
            </button>
        </form>
    <br>
 </div>
</body>
</html>