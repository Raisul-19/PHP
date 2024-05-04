<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body> 

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 py-5 text-center m-auto bg-info">
                    <form action="view.php" method="post">

                        <div class="form-group my-2">
                            <input type="text" class="form-control" name="fname" placeholder="Enter your name...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['name_error'])){
                                        echo $_GET['name_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['email_error'])){
                                        echo $_GET['email_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <input type="password" class="form-control" name="password" placeholder="Enter password...">
                            
                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['pass_error'])){
                                        echo $_GET['pass_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <input type="password" class="form-control" name="re_password" placeholder="Confirm password...">

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['re_pass_error'])){
                                        echo $_GET['re_pass_error'];
                                    }

                                ?>
                            </div>

                        </div>

                        <div class="form-group my-2">
                            <select name="country" class="form-control">
                                <option value="">Choose your country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="America">America</option>
                                <option value="Franc">Franc</option>
                                <option value="USN">Unitade State of Noakhali</option>
                            </select>

                            <div class="error text-danger">
                                <?php

                                    if(!empty($_GET['country_error'])){
                                        echo $_GET['country_error'];
                                    }

                                ?>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </section>



    




    <!-- bootstrap js file link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- <script>
        function myFunction() {
        var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script> -->
    
</body>
</html>