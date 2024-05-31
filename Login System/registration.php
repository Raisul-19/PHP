<?php

    session_start();
    require 'header.php';

?>


<!-- form design start -->


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center my-5 pb-3 bg-info">
                <div class="header py-3 my-3 bg-secondary text-white">
                    <h2>Registration Here </h2>
                </div>

                <form action="registration_post.php" method="post" enctype="multipart/form-data">
                    <div class="form-group py-2">
                        <input type="text" class="form-control" name="fname" placeholder="Enter your name...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['name_error'])){
                                    echo $_GET['name_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['email_error'])){
                                    echo $_GET['email_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2 position-relative">
                        <input type="password" id="passShow" class="form-control" name="password" placeholder="Creat a password...">

                        <button type="button" onclick="myFunction()" class="btn btn-success position-absolute" style="right: 0; top: 8px">Show</button>

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['password_error'])){
                                    echo $_GET['password_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="password" class="form-control" name="re_password" placeholder="Confirm password...">

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['re_password_error'])){
                                    echo $_GET['re_password_error'];
                                }

                            ?>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <input type="radio" name="gender" id="male" value="Male"><label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="Female"><label for="female">Female</label>
                        <input type="radio" name="gender" id="others" value="Others"><label for="others">Others</label>

                        <div class="error_msg text-danger">
                            <?php

                                if(!empty($_GET['gender_error'])){
                                    echo $_GET['gender_error'];
                                }

                            ?>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <p>Select Your Profile Picture</p>
                        <input type="file" class="form-control" name="photo" >
                    </div>

                    <button type="submit" class="btn btn-success mt-5">Submit</button>

                 
                    <?php if(isset($_SESSION['success'])){ ?>

                        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                            <strong><?php echo $_SESSION['success']; unset($_SESSION['success']) ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php } ?>
                    

                </form>

            </div>
        </div>
    </div>


</section>




<!-- form design end -->



<script>
        function myFunction() {
        var x = document.getElementById("passShow");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>




<?php

    require 'footer.php';

?>