<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap 5 CSS via link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Pribadi -->
    <link rel="stylesheet" href="style.css">

    <style>
      body {
        background-color: #eee;
        overflow-x: hidden;
      }
    </style>
    <title>Dashboard</title>
  </head>
  <body>

    <?php require 'temp_dash.html'; ?>


    <!-- konten dashboard -->
    <div class="row py-3 pt-5 col-sm-10 ms-auto konten" style="border: 2px solid red;">
      <h1><i class="fa-solid fa-gauge pe-3"></i>DASHBOARD</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum nulla placeat fugiat itaque, totam sunt nihil dicta! Ex sapiente iure tempora blanditiis deserunt necessitatibus explicabo minus nemo. Dolorem quia omnis neque magnam laudantium possimus repellat! Est blanditiis quisquam nesciunt tempore praesentium, voluptatem maxime quas ea fuga, at ullam libero quaerat.</p>
      <div class="card bg-success mb-3 ms-3" style="max-width: 18rem;">
        <div class="card-body text-light">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card bg-info mb-3 ms-3" style="max-width: 18rem;">
        <div class="card-body text-dark">
          <h5 class="card-title">info card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card bg-primary mb-3 ms-3" style="max-width: 18rem;">
        <div class="card-body text-light">
          <h5 class="card-title">primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d614bb0962.js" crossorigin="anonymous"></script>

    <!-- javascript pribadi -->
    <script src="script.js"></script>
    
  </body>
</html>