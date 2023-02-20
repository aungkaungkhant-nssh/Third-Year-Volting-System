<?php 
    require("./include/header.php");
    $categories = $categories->getAll();    
?>
    <!-- start main component -->
    <div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Add Voted</h4>
                <?php if (isset($_GET['registered'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Add Voter Success</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                <!-- Dev Aung San Min Updated file upload -->
                <form action="../../actions/admin/voter/createVoter.php"
                      method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Year" name="year">
                    </div>
                    <div class="form-group">
                        <select name="categoryId" id="" class="form-control">
                            <option value="">Select Category</option>
                            <?php  foreach($categories as $cat) : ?>
                                <option value="<?= $cat->id ?>"><?= $cat->name ?></option>
                            <?php endforeach ;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Roll no" name="role_no">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class=" ">
                        <input type="submit" value="Add Voted" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>
    <!-- end main component -->
<?php require("./include/footer.php") ?>