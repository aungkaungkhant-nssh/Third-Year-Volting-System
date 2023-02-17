<?php require("./include/header.php") ?>
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
                                <th scope="col">Image</th>
                                <th scope="col">Year</th>
                                <th scope="col">Vote Count</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Second Year</td>
                                <td>10</td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    |
                                    <button class="btn btn-outline-danger btn-sm">
                                         <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                           
                        </tbody>
                </table>
            </div> 
    </div>
<?php require("./include/footer.php") ?>