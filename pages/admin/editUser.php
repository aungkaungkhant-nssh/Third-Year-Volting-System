<?php require("./include/header.php") ?>
    <?php 
        $student= $students->getAll($_GET["userId"]);
        
    ?>
    <!-- start main component -->
    <div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                 <div class="d-flex justify-content-between  align-items-center mb-4">
                    <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Update User</h4>
                    <a href="./allUsers.php" class="btn btn-outline-primary">
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
                <form action="../../actions/admin/updateUser.php" method="post">
                    <input type="hidden" name="userId" value="<?= $student[0]->id ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $student[0]->name ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $student[0]->phone ?>">
                    </div>
                 
                    <div class=" ">
                        <input type="submit" value="Update User" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>
    <!-- end main component -->
<?php require("./include/footer.php") ?>