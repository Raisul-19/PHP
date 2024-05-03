<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center py-5 bg-info">
                    <form action="view.php" method="post">
                        <div class="form-group py-2">
                            <input type="text" class="form-control" name="fname" placeholder="Enter your name">

                            <div class="err text-danger">
                                <?php
                                    if(!empty($_GET['name_error'])){
                                        echo $_GET['name_error'];
                                    }

                                ?>

                            </div>

                        </div>
                        <div class="form-group py-2">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email">

                            <div class="err text-danger">
                                <?php
                                    if(!empty($_GET['email_error'])){
                                        echo $_GET['email_error'];
                                    }

                                ?>
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <input type="password" class="form-control" name="password" placeholder="enter password">

                            <div class="err text-danger">
                                <?php

                                    if(!empty($_GET['pass_error'])){
                                        echo $_GET['pass_error'];
                                    }


                                ?>

                            </div>
                        <div class="form-group py-2">
                            <input type="password" class="form-control" name="re_password" placeholder="enter Re-password">

                            <div class="err text-danger">
                                <?php

                                    if(!empty($_GET['re_pass_error'])){
                                        echo $_GET['re_pass_error'];
                                    }


                                ?>

                            </div>

                        </div>

                        <div class="form-group py-2">
                            <select name="country" class="form-control">
                                <option value="">Choose your country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Brazil">Brazil</option>
                                <option value="USN">Uninted State of Noakhali</option>
                            </select>

                            <div class="err text-danger">
                                <?php
                                    if(!empty($_GET['country_error'])){
                                        echo $_GET['country_error'];
                                    }

                                ?>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>



                    </form>
                </div>
            </div>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


  </body>
</html>