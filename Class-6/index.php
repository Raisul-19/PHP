<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-5 Form validation</title>

    <!-- bootstrap css file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center m-auto py-5 bg-light">
                <form action="view.php" method="post">
                    <div class="form-group mb-3 width-100">
                        <input type="text" name="fname" placeholder="enter your name">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['nam_err'])){
                                echo $_GET['nam_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3 width-100">
                        <input type="text" name="email" placeholder="enter your email">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['eml_err'])){
                                echo $_GET['eml_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3 width-100">
                        <input type="password" name="password" placeholder="enter a strong password" id="myInput" class="from-control">
                        <button type="button" onclick="myFunction()">show</button>

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['pass_err'])){
                                echo $_GET['pass_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    
                    <div class="form-group mb-3 width-100">
                        <input type="password" name="re-password" placeholder="enter re-password">

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['rpass_err'])){
                                echo $_GET['rpass_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="contry">
                            <option value="">choose your country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="USN">United Stade of Noakhali</option>
                            <option value="Brazil">Brazil</option>
                        </select>

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['contry_err'])){
                                echo $_GET['contry_err'];
                            }

                            ?>
                        </div>

                    </div>

                    <div class="form-group mb-3 width-100">
                        <input type="radio" name="gander" value="Male">Male
                        <input type="radio" name="gander" value="Fe-male">Fe-male
                        <input type="radio" name="gander" value="Other">Other

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['gander_err'])){
                                echo $_GET['gander_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group mb-3 width-100">
                        <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                        <input type="checkbox" name="hobbies[]" value="Football">Football
                        <input type="checkbox" name="hobbies[]" value="Ha-Du-Du">Ha-Du-Du
                        <input type="checkbox" name="hobbies[]" value="Mbile-Game">Mbile-Game

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['hobbies_err'])){
                                echo $_GET['hobbies_err'];
                            }

                            ?>
                        </div>

                
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="subject[]" multiple>
                            <option value="Math">Math</option>
                            <option value="ICT">ICT</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                        </select>

                        <div class="err text-danger py-2">
                            <?php
                            if(!empty($_GET['sub_err'])){
                                echo $_GET['sub_err'];
                            }

                            ?>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>


    <!-- bootstrap js file link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    
</body>
</html>