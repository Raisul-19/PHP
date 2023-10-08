<?php

    require 'header.php';

?>


<section class="nav bg-secondary">
    <div class="nav-bar container">
        <div class="row py-2">
            <div class="col-md-3">
                <div class="logo">
                    <h4 class="text-white">Lo<span class="text-warning">Go</span></h4>
                </div>

            </div>

            <div class="col-md-6">
                <div class="menu text-right">
                    <ul class="list-inline py-2">
                        <li class="list-inline-item px-2"><a class="p-2 text-decoration-none text-warning text-uppercase" href="#">Home</a></li>
                        <li class="list-inline-item px-2"><a class="p-2 text-decoration-none text-warning text-uppercase" href="#">about</a></li>
                        <li class="list-inline-item px-2"><a class="p-2 text-decoration-none text-warning text-uppercase" href="#">service</a></li>
                        <li class="list-inline-item px-2"><a class="p-2 text-decoration-none text-warning text-uppercase" href="#">contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 text-right">
                <div class="button">
                   <a href="login.php"><button class="btn btn-success mx-2">LogIn</button></a>
                   <a href="registration.php"><button class="btn btn-primary mx-2">Sign Up</button></a>
                </div>

            </div>


        </div>


    </div>

</section>

<section class="banner">
    <div class="bg-image">
        <img src="images/background.jpg" alt="" class="w-100">
    </div>
</section>






<?php

    require 'footer.php';

?>