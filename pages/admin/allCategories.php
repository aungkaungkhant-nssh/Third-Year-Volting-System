<?php require("./include/header.php") ?>

<?php
   $cats = $categories->getAll();
   $count=0;
?>
<div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
          
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <div class="d-flex justify-content-between  align-items-center mb-4">
                    <h4 class="text-secondary" style="font-weight: 400">All Categories</h4>
                    <a href="./addCategory.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a>
                </div>
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cats as $cat): ?>
                                <?php $count+=1; ?>
                                <tr>
                                    <td>
                                        <?= $count ?>
                                     </td>
                                     <td>
                                         <?= $cat->name ?>
                                     </td>
                                     <td>
                                        <a class="btn btn-outline-warning btn-sm" href="./editCategory.php?categoryId=<?=$cat->id?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        |
                                        <form action="../../actions/admin/categories/deleteCategory.php" method="post" style="display:inline-block;">
                                            <input type="hidden" value="<?= $cat->id ?>" name="categoryId">
                                            <button class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        
                                     </td>
                                </tr>
                            <?php endforeach; ?>
                           
                        </tbody>
                </table>
            </div> 
    </div>
<?php require("./include/footer.php") ?>