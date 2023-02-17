<?php require("./include/header.php") ?>
    <!-- start main component -->
    <div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Add User</h4>
                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-warning">
                        Cannot create account. Please try again.
                    </div>
                <?php endif ?>
                <form action="../../actions/admin/createUser.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class=" ">
                        <input type="submit" value="Add User" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>
    <!-- end main component -->
<?php require("./include/footer.php") ?>