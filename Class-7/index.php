<?php

$host = 'localhost';
$user = 'root';
$password = '';
$bd = 'phpclass7';

$db_connection = mysqli_connect($host, $user, $password, $bd);
        // // if($db_connection){
        // //     echo "database connected";
        // // }
        // // else{                                     // checking database connected or not..
        // //     echo "could not connecta to db";
        // // }

        // mysqli_errno($db_connection);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-7 database connection</title>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body> 


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="form bg-info p-5 text-white">
                            <div class="head text-center">
                                <h2>Sign Up Here</h2>
                            </div>
                            <form action="user_post.php" method="post">
                                <div class="py-2">
                                    <input type="text" name="userName" placeholder="Enter your name" class="form-control">

                                    <div class="err-msg text-center text-danger">
                                        <?php
                                            if(!empty($_GET['nam_err'])){
                                                echo $_GET['nam_err'];
                                            }

                                        ?>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control">

                                    <div class="err-msg text-center text-danger">
                                        <?php
                                            if(!empty($_GET['email_err'])){
                                                echo $_GET['email_err'];
                                            }

                                        ?>
                                </div>
                                <div class="py-2">
                                    <input type="password" name="password" placeholder="Enter your password" class="form-control">
                                </div>
                                <div class="py-2 text-center">
                                    <input name="gender" type="radio" value="Male">Male
                                    <input name="gender" type="radio" value="Female">Female
                                    <input name="gender" type="radio" value="Others">Others
                                </div>

                                <div class="py-2 text-center">
                                    <button class="btn btn-danger">Submit</button>

                                </div>


                                <div class="<?=(!empty($_GET['success']))?'alert alert-success':''; ?>" role="alert">
                                        <?php
                                            if(!empty($_GET['success'])){
                                                echo $_GET['success'];
                                            }

                                        ?>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>





        <!-- bootstrap js file link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>