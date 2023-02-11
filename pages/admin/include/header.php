<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./addVoter.css">
</head>
<body>
    <?php 
        $request_uri =  $_SERVER['REQUEST_URI']; 
    ?>
  
<section style="width: 100vw;">
        <div class="row no-gutters">
            <!-- start sidebar -->
            <div class="col-md-2 bg-light" style="height: 100vh;box-shadow:4px 1px 5px 0px rgba(0,0,0,0.5)">
                <div class="profile-container">
                    <div class="profile">
                        <h5 class="text-center">Admin</h5>
                    </div>
                </div>
                <hr>
                <div>
                    <ul>
                        <li>
                            <a href="">Dashboard</a>
                        </li>
                        <li>
                            <a href="addUser.php" class="<?= strpos($request_uri,"addUser") >0 ? 'text-primary' : '' ?>">Add User</a>
                        </li>
                        <li>
                            <a href="addVoter.php" class="<?= strpos($request_uri,"addVoter") >0 ? 'text-primary' : '' ?>">Add Voter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end sidebar -->
            