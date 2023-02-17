<?php require("./include/header.php") ?>

<?php
   $cats = $categories->getAll();
?>
<div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
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
                                <tr>
                                    <td>
                                        <?= $cat->id ?>
                                     </td>
                                     <td>
                                         <?= $cat->name ?>
                                     </td>
                                     <td>
                                        <a class="btn btn-warning btn-sm" href="./editCategory.php?categoryId=<?=$cat->id?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        |
                                        <form action="../../actions/admin/categories/deleteCategory.php" method="post" style="display:inline-block;">
                                            <input type="hidden" value="<?= $cat->id ?>" name="categoryId">
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        
                                     </td>
                                </tr>
                            <?php endforeach; ?>
                           
                        </tbody>
                </table>
            </div> 
    </div>
<?php require("./include/footer.php") ?>