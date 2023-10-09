<?php

    require 'header.php';

?>

<section class="registration-form">
    <div class="container">
        <div class="row py-5 mt-5">
            <div class="col-md-8 mx-auto bg-secondary py-3">
                <h2 class="text-center text-white bg-success p-3">Registration Here</h2>
                <form action="register-post.php" method="post" enctype="multipart/form-data">
                    <div class="from-group my-3">
                        <input type="text" name="userName" placeholder="Enter your name..." class="form-control">
                    </div>
                    
                    <div class="from-group my-3">
                        <input type="email" name="email" placeholder="Enter your email..." class="form-control">
                    </div>

                    <div class="from-group my-3">
                        <input type="password" name="password"placeholder="Enter strong password..." class="form-control">
                    </div>

                    <div class="from-group my-3">
                        <input type="password" name="rePassword" placeholder="confirm password..." class="form-control">
                    </div>

                    <div class="from-group my-3 text-center text-white">
                        <p class="text-white">Choose your gender : </p>
                        <input type="radio" name="gender" id="gender" value="Male">Male 
                        <input type="radio" name="gender" id="gender" value="Female">Female
                        <input type="radio" name="gender" id="gender" value="Others">Others
                    </div>
                    <div class="form-group">
                        <input type="file" name="photo" class="form-control">
                    </div>

                    <div class="from-group mt-5 mb-3 row">

                        <div class="submit-button col-6">
                                <input type="reset" class="btn btn-primary form-control" value="Reset" >
                        </div>

                        <div class="submit-button col-6">
                                <input type="submit" class="btn btn-success form-control" value="Submit" >
                        </div>

                        
                    </div>

                    <div class="">
                        <div class="<?=(!empty($_GET['success'])?'alert alert-success':'') ?>" role="alert">
                            <?php
                                if(!empty($_GET['success'])){
                                    echo $_GET['success'];
                                }

                            ?>
                                
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

</section>






<?php

    require 'footer.php';

?>