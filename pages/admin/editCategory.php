<?php include("./include/header.php") ?>
<?php
   $cats = $categories->getAll($_GET["categoryId"]);
?>
<div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <h4 class="text-secondary" style="font-weight: 400;margin-bottom:20px">Update Category</h4>
                <?php if ( isset($_GET['success']) ) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Update Category Success</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                <?php if ( isset($_GET['error']) ) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Something went wrong</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                <!-- Dev Aung San Min Updated file upload -->
                <form action="../../actions/admin/categories/updateCategory.php"
                      method="post"
                     >
                     <input type="hidden" name="categoryId" value="<?= $cats[0]->id ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $cats[0]->name ?>">
                    </div>
                    
                    <div class=" ">
                        <input type="submit" value="Update Category" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
    </div>

<?php include("./include/footer.php") ?>