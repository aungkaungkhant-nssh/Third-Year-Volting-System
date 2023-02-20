<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCSL Volting System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        <h1 class="h3 mb-3">Admin Login</h1>
         <?php if ( isset($_GET['incorrect']) ) : ?>
            <div class="alert alert-warning">
                Incorrect Phone or Password
            </div> 
        <?php endif ?>
        <form action="../../actions/admin/login.php" method="post">
            <div class="form-group">
                <input 
                    type="text" name="phone" 
                    class="form-control mb-2" 
                    placeholder="Phone" required
                >
            </div>
            <div class="form-group">
                <input 
                    type="password" name="password" 
                    class="form-control mb-2" 
                    placeholder="Password" required
                >
            </div>
            

            <button type="submit" 
                class="w-100 btn btn-lg btn-primary">
                Login
            </button>
        </form>
    <br>
 </div>
</body>
</html>