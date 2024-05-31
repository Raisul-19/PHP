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
                    <h2>Log In Here </h2>
                </div>

                <form action="login-post.php" method="post" enctype="multipart/form-data">

                    <div class="form-group py-2">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email...">


                    </div>
                    <div class="form-group py-2 position-relative">
                        <input type="password" id="passShow" class="form-control" name="password" placeholder="Enter password...">

                        <button type="button" onclick="myFunction()" class="btn btn-success position-absolute" style="right: 0; top: 8px">Show</button>


                    </div>
                   
                    <button type="submit" class="btn btn-success mt-5">Log In</button>

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