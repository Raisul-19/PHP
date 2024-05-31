<?php

    session_start();
    require 'header.php';

?>

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 py-5 text-center m-auto bg-dark">

                    <div class="header text-white py-2 mb-3 bg-secondary">
                        <h2>LogIn Form</h2>
                    </div>
                    <form action="login-post.php" method="post" enctype="multipart/form-data">

       

                        <div class="form-group my-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email...">


                        </div>

                        <div class="form-group my-3 showBtn">
                            <input type="password" class="form-control" name="password" placeholder="Enter password..." id="passShow">
                            <button type="button" onclick="myFunction()" class="btn btn-success">Show</button>
                            


                        </div>
                       


                        <button type="submit" class="btn btn-success mt-4">Log In</button>

                       <?php if(isset($_SESSION['login_error'])){ ?>

                        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                            <strong><?php echo $_SESSION['login_error']; unset($_SESSION['login_error']) ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                       <?php } ?>



                    </form>
                </div>
            </div>
        </div>
    </section>



    
<?php

    require 'footer.php';

?>

