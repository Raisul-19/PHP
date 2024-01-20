<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="form bg-info text-white py-5 px-4">
                    <div class="head text-center">
                        <h2>Sign Up Here</h2>
                    </div>
                    <form action="user_post.php" method="post">
                        <div class="py-2">
                            <input type="text" name="fname" placeholder="Enter Your Name..." class="form-control">
                        </div>
                        <div class="err_msg text-danger">
                            <?php
                                if(!empty($_GET['nam_err'])){
                                    echo $_GET['nam_err'];
                                } 
                             ?>
                        </div>

                        <div class="py-2">
                            <input type="email" name="email" placeholder="Enter Your Email..." class="form-control">
                        </div>
                        <div class="err_msg text-danger">
                            <?php
                            if(!empty($_GET['eml_err'])){
                                echo $_GET['eml_err'];
                            }

                            ?>
                        </div>


                        <div class="py-2">
                            <input type="password" name="password" placeholder="Enter Your password..." class="form-control">
                        </div>
                        <div class="err_msg text-danger">
                            <?php
                                if(!empty($_GET['pass_err'])){
                                    echo $_GET['pass_err'];
                                }

                            ?>
                        </div>


                        <div class="py-2 text-center">
                            <input name="gender" type="radio" value="male">Male
                            <input name="gender" type="radio" value="female">Female
                            <input name="gender" type="radio" value="others">Others
                        </div>
                        <div class="err_msg text-danger">
                            <?php
                                if(!empty($_GET['gen_err'])){
                                    echo $_GET['gen_err'];
                                }

                            ?>
                        </div>



                        <div class="py-2">
                            <button class="btn btn-warning form-control">Submit</button>
                        </div>
                    </form>

                    <div class="<?= (!empty($_GET['success']))?'alert alert-success':'';  ?>" role="alert">
                        <?php
                            if(!empty($_GET['success'])){
                                echo $_GET['success'];
                            }

                        ?>
                    </div>

                    <div class="msg text-center">
                        
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>




    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>