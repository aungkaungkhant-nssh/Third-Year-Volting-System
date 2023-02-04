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
                            <a href="">Add User</a>
                        </li>
                        <li>
                            <a href="" class="text-primary">Add Voter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end sidebar -->

            <!-- start main component -->
            <div class="col-md-10" style="height: 100vh;">
                    <div class="bg-primary py-3 ">
                        <h5 class="text-white ml-3">UCSL Volting System</h5>
                    </div>
                    <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                        <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Add Voted</h4>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Year">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Roll no">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control">
                            </div>
                            <div class=" ">
                                <input type="submit" value="Add Voted" class="btn btn-primary w-100">
                            </div>
                        </form>
                    </div>
            </div>

            <!-- end main component -->
        </div>
        
    </section>
</body>
</html>