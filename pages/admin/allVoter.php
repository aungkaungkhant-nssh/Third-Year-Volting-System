<?php 
    require("./include/header.php");
    $voters = $voters->getAll();
    $count= 0;

?>
<div class="col-md-10" style="height: 100vh;">
            <div class="bg-primary py-3 ">
                <h5 class="text-white ml-3">UCSL Volting System</h5>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                <div class="d-flex justify-content-between  align-items-center mb-4">
                    <h4 class="text-secondary" style="font-weight: 400">All Voters</h4>
                    <a href="./addVoter.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a>
                </div>
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Year</th>
                                <th scope="col">Vote Count</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($voters as $voter): ?>
                                <?php $count+=1; ?>
                                <tr>
                                    <th scope="row"><?= $count ?></th>
                                    <td><?= $voter->name ?></td>
                                    <td>
                                        <img src="../../image/<?= $voter->image?>" alt="" style="width:50px;height:50px;border-radius:25px;">
                                    </td>
                                    <td>
                                        <?= $voter->year ?>
                                    </td>
                                    <td><?= $voter->vote_count ?></td>
                                    <td>
                                        <a class="btn btn-outline-warning btn-sm" href="./editVoter.php?voterId=<?= $voter->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        |
                                        <form action="../../actions/admin/voter/deleteVoter.php" method="post"  style="display:inline-block;">
                                            <input type="hidden" value="<?= $voter->id ?>" name="voterId">
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                          
                                    </td>
                                 </tr>
                            <?php endforeach;?>
                        
                           
                        </tbody>
                </table>
            </div> 
 </div>
<?php require("./include/footer.php") ?>