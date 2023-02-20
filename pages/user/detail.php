<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php 
        include("../../vendor/autoload.php");
        use Helpers\Auth;
        use Libs\Database\MySQL;
        use Libs\Database\VotersTable;
        use Libs\Database\VotesTable;
        $voters = new VotersTable(new MySQL());
        $votes = new VotesTable(new MySQL());
        $auth  = Auth::check();
        $voters = $voters->getAll($_GET["voterId"]);
        $isVoted =  $votes->isVoted($voters[0]->categoryId,$auth->id);

    
    ?>
    <div class="my-3 mx-3">
        <a href="vote.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <section class="col-md-6 offset-md-3" style="margin-top:20px;">
        <div class="card">
            <img src="../../image/<?= $voters[0]->image ?>" alt="" style="height:380px" >
            <div class="card-body">
                <div class="my-2">
                    <span style="font-weight:bolder">Name -  </span>
                    <span><?= $voters[0]->name ?></span>
                </div>
                <div class="my-2">
                    <span style="font-weight:bolder">no -  </span>
                    <span><?= $voters[0]->role_no ?></span>
                </div>
                <div class="my-2">
                    <span style="font-weight:bolder">Academic Year -  </span>
                    <span><?= $voters[0]->year ?></span>
                </div>
                <div class=" my-2">
                    <span style="font-weight:bolder">Category Name -  </span>
                    <span><?= $voters[0]->categoryName ?></span>
                </div>
                <?php if(!$isVoted):?>
                    <hr>
                        <div class="mt-3">
                            <form action="../../actions/user/vote.php" method="post">
                                <input type="hidden" value="<?=$voters[0]->id ?>" name="voterId">
                                <input type="hidden" value="<?= $voters[0]->categoryId ?>" name="categoryId">
                                <input type="hidden" value="<?= $auth->id ?>" name="studentId">
                                
                                <button class="btn btn-primary btn-block">Vote</button> 
                            </form>
                        
                        </div>
                <?php endif ;?>
              
            </div>
        </div>
    </section>
</body>
</html>