<?php 
    include("./include/header.php");
    $categories = $categories->getAll();
    if(isset($_GET["searchCategory"])){
     
       $voters= $voters->getBySearchCategory($_GET["searchCategory"]);
    }else{
      
       $voters =  $voters->getBySearchCategory($categories[0]->id);
    }
 
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
                    <form action="?searchCategory=<?= isset($_GET["categoryId"]) ? $_GET["categoryId"] : '' ?>">
                        <select  id="searchCategory" class="form-control" onchange="this.form.submit()" name="searchCategory">
                            <?php  foreach($categories as $cat) : ?>
                                <option value="<?= $cat->id ?>" <?= $cat->id==$voters[0]->categoryId ? 'selected' :'' ?>><?= $cat->name ?></option>
                            <?php endforeach ;?>
                        </select>
                    </form>
                  
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
                                <?php foreach($voters as $voter) : ?>
                                    <tr>
                                        <th scope="row"><?= $voter->name ?></th>
                                        <td >
                                            <img src="../../image/<?= $voter->image ?>" alt="" style="width: 50px;height:50px;border-radius:25px" data-toggle="modal" data-target="#exampleModalCenter">
                                        </td>
                                        <td><a href="detail.php?voterId=<?= $voter->id ?>" class="btn btn-primary">Details</a></td>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                
                                                        <div class="modal-body">
                                                                <img src="../../image/<?= $voter->image ?>" alt="" style="width: 50px;height:50px;border-radius:25px">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                         </div>
                                                    </div>
                                                </div>
                                        </div>
                                     </tr>
                                <?php endforeach; ?>
                        </tbody>
                       
                    </table>
                </div>
             </section>
             
             <!-- end vote section -->
    </section>
<?php include("./include/footer.php") ?>
  