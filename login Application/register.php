<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application of login system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row py-5">
            <div class="col-lg-10 m-auto bg-info">
                <div class="header text-center bg-primary mt-3 py-2 text-white">
                    <h2>Register Here</h2>
                </div>
                <form action="">
                    <div class="py-3">
                        <input type="text" name="fname" class="form-control" placeholder="Enter your name...">
                    </div>

                    <div class="py-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email...">
                    </div>

                    <div class="py-3">
                        <input type="password" name="password" class="form-control" placeholder="Creat your password...">
                    </div>

                    <div class="py-3">
                        <input type="password" name="re_password" class="form-control" placeholder="Confirm password...">
                    </div>

                    <div class="py-3 text-center text-white">
                        <input type="radio" name="gender" id="gender-male" class="" value="male"><label for="gender-male">Male</label>
                        <input type="radio" name="gender" id="gender-female" class="" value="female"><label for="gender-female">Female</label>
                        <input type="radio" name="gender" id="gender-others" class="" value="others"><label for="gender-others">Others</label>
                    </div>

                    <div class="py-3">
                        <input type="file" name="photo" class="form-control">
                    </div>

                    <div class="py-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>