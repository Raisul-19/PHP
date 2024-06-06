<?php
    session_start();
    require 'header.php'

?>
    <div class="container mt-3 pt-5">
        <div class="row">
            <div class="col-lg-7 text-center m-auto pb-5 bg-dark">
                <div class="head bg-secondary py-3 mb-4 text-white">
                    <h3>LogIn Form</h3>
                </div>


                <form class="text-white" action="login-post.php" method="post" enctype="multipart/form-data">


                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="email" placeholder="enter your email">
                
                    </div>

                    <div class="form-group mb-3 pass-btn">
                        <input class="form-control" type="password" name="password" placeholder="enter a strong password" id="myInput" class="from-control">
                        <button class="btn btn-success" type="button" onclick="myFunction()">show</button>

                
                    </div>


                    <button type="submit" class="btn btn-success">LogIn</button>


                <?php 

                if(isset($_SESSION['login_error'])){  ?>

                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            
                <?php }  ?>
                


                </form>
            </div>

        </div>
    </div>



<?php


    require 'footer.php';

?>