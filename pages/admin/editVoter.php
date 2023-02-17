<?php 
    require("./include/header.php");
    $voters= $voters->getAll($_GET["voterId"]);
  
?>
 
    <!-- start main component -->
    <div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                 <div class="d-flex justify-content-between  align-items-center mb-4">
                    <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Update Voters</h4>
                    <a href="./allVoter.php" class="btn btn-outline-primary">
                            <i class="fa-solid fa-list"></i>
                    </a>
                </div>
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Update User Success</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                <form action="../../actions/admin/voter/updateVoter.php"
                      method="post"
                      enctype="multipart/form-data">
                      <input type="hidden" value="<?= $voters[0]->id ?>" name="voterId">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $voters[0]->name ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Year" name="year"  value="<?= $voters[0]->year ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Roll no" name="role_no"  value="<?= $voters[0]->role_no ?>">
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="my-3">
                        <img src="../../image/<?= $voters[0]->image?>" alt="" style="width:100px;height:100px">
                    </div>
                    <div class=" ">
                        <input type="submit" value="Update Voted" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>
    <!-- end main component -->
<?php require("./include/footer.php") ?>