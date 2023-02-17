<?php include("./include/header.php") ?>
<?php
    //    unset($_SESSION["studentInfo"]);
   
    ?>
    <section>
            <!-- write chan hein start navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">UCSL Volting System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item"> -->
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=  $auth->name ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../../actions/user/logout.php">Logout</a>
                           
                        </div>
                    </div>
                </div>
             </nav>
             <!-- write chan hein end navigation -->
             <!-- start vote section -->
             <section class="container">
                <div class="my-5">
                    <select name="" id="" class="form-control">
                        <option value="">King</option>
                        <option value="">Queen</option>
                    </select>
                </div>
                <div style="height:500px;overflow-y:scroll">
                    <table class="table">

                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><a href="detail.php" class="btn btn-primary">Details</a></td>
                            
                            </tr>
                            <tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr><tr>
                            <th scope="row">SU SU</th>
                            <td><img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="" style="width: 50px;height:50px;border-radius:25px"></td>
                            <td><button class="btn btn-primary">Details</button></td>
                            
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
             </section>
             <!-- end vote section -->
    </section>
<?php include("./include/footer.php") ?>
  