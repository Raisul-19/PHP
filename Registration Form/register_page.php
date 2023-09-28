<?php

    require 'header.php';

?>





<section class="banner pt-5">
    <div class="container ">
        <div class="row text-white text-center">
           <div class="col-md-8 mx-auto registration-form p-4">
            <div class="head py-3 my-3 bg-success">
                <h2>Registration From</h2>
            </div>
            <div class="form">
                <form action="register-info.php" method="post">
                    <div class="form-group pb-3">
                        <input type="text" name="fname" placeholder="Enter your name" class="form-control" >
                    </div>
                    <div class="form-group pb-3">
                        <input type="email" name="email" placeholder="Enter your email" class="form-control" >
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" name="password" placeholder="Enter your password" class="form-control" >
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" name="repassword" placeholder="Confirme Password" class="form-control" >
                    </div>
                        <input type="tel" name="phone" placeholder="Enter you phone number" class="form-control" >
                    </div>

                    <div class="form-group py-3">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Others">Others
                    </div>

                    <div class="form-group mb-5">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>


                    <div class="<?=(!empty($_GET['success'])?'aler alert-success py-2':''); ?>" role="alert">
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






<?php

    require 'footer.php';

?>