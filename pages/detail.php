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
    <div class="my-3 mx-3">
        <a href="vote.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <section class="col-md-6 offset-md-3" style="margin-top: 80px;">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2020/12/13/16/37/woman-5828787__340.jpg" alt="">
            <div class="card-body">
                <div class="my-2">
                    <span style="font-weight:bolder">Name -  </span>
                    <span>Su Su</span>
                </div>
                <div class="my-2">
                    <span style="font-weight:bolder">no -  </span>
                    <span>1</span>
                </div>
                <div class="my-2">
                    <span style="font-weight:bolder">Academic Year -  </span>
                    <span>First Year</span>
                </div>
                <div class="d-flex my-2">
                    <div class="mr-2">
                        <input type="checkbox" value="Queen"> 
                        <label for="">Queen</label>
                    </div>
                    <div>
                        <input type="checkbox" value="Cute Queen">
                        <label for="">Cute Queen</label>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary">Vote</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>