<?php require("./include/header.php") ?>
    <!-- start main component -->
    <div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Add Voted</h4>
                <!-- Dev Aung San Min Updated file upload -->
                <form action="../../actions/admin/upload.php"
                      method="post"
                      enctype="multipart/form-data">
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
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class=" ">
                        <input type="submit" value="Add Voted" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>
    <!-- end main component -->
<?php require("./include/footer.php") ?>