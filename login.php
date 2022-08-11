<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <style media="screen">

      .big-container {
        margin: 0;
        padding: 0;
        height: 100vh;
      }

      .form-element {
        margin: 0;
        /* padding: 0; */
        padding: 0 30px;
        /* box-sizing: border-box; */
      }

      .image {
        padding: 0;
        background-image: url('../assets/learning.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right;
      }

      .forgot-password a {
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <div class="row big-container">
      <div class="col-md-4 col-sm-12 order-md-1 order-sm-2 row align-items-center form-element">

        <form>
          <h1>Welcome<br>Back</h1>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" required>
          </div>
          <div class="mb-3 forgot-password text-end">
            <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            <a href="#">Forgot Password</a>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-8 col-sm-12 order-md-2 order-sm-1 image">
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
