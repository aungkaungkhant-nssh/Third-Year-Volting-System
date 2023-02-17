<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./addVoter.css">
</head>
<body>
    <?php 
        include("../../vendor/autoload.php");
        use Helpers\Auth;
        use Libs\Database\MySQL;
        use Libs\Database\CategoriesTable;
       
        $request_uri =  $_SERVER['REQUEST_URI']; 
        $categories =  new CategoriesTable(new MySQL());
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
                <div style="margin-top:25px;">
                    <ul style="padding:0px 20px;;">
                        <li>
                            <a href="">Dashboard</a>
                        </li>
                        <li id="accordion">
                            <div  data-toggle="collapse" data-target="#category" aria-expanded="true" aria-controls="collapseOne" style="cursor:pointer">
                                <span class="mr-2">Category</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="category" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"> 
                                <ul style="margin:0;padding:10px 5px 0px 8px;">
                                    <li>
                                        <a href="allCategories.php" class="<?= strpos($request_uri,"allCategory") >0 ? 'text-primary' : '' ?>">All Category</a>
                                    </li>
                                    <li>
                                         <a href="addCategory.php" class="<?= strpos($request_uri,"addCategory") >0 ? 'text-primary' : '' ?>">Add Category</a>
                                     </li>
                                </ul>
                              
                            </div>  
                        </li>
                        <li id="accordion">
                            <div  data-toggle="collapse" data-target="#voter" aria-expanded="true" aria-controls="collapseOne" style="cursor:pointer">
                                <span class="mr-2">Voter</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="voter" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"> 
                                <ul style="margin:0;padding:10px 5px 0px 8px;">
                                    <li>
                                        <a href="allVoter.php" class="<?= strpos($request_uri,"addVoter") >0 ? 'text-primary' : '' ?>">All Voter</a>
                                    </li>
                                    <li>
                                         <a href="addVoter.php" class="<?= strpos($request_uri,"addVoter") >0 ? 'text-primary' : '' ?>">Add Voter</a>
                                     </li>
                                </ul>
                              
                            </div>  
                        </li>
                        <li id="accordion">
                            <div  data-toggle="collapse" data-target="#user" aria-expanded="true" aria-controls="collapseOne"  style="cursor:pointer">
                                <span class="mr-2">Users</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="user" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"> 
                                <ul style="margin:0;padding:10px 5px 0px 8px;">
                                    <li>
                                        <a href="allUsers.php" class="<?= strpos($request_uri,"addUser") >0 ? 'text-primary' : '' ?>">All Users</a>
                                    </li>
                                    <li>
                                        <a href="addUser.php" class="<?= strpos($request_uri,"addUser") >0 ? 'text-primary' : '' ?>">Add User</a>
                                    </li>
                                </ul>
                              
                            </div>  
                        </li>
                    

                    </ul>
                </div>
            </div>
            <!-- end sidebar -->
            