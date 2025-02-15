<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-item a{
            color: whitesmoke;
        }
        .nav-item a:hover{
            color: whitesmoke;
            background: red;
            boarder-radius: 7px;
        }
 

    </style>

</head>
<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" width: 100% id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Nepal voting system</a>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-fw fa-home"></i>Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-fw fa-search"></i>Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-fw fa-envelope"></i>Contact us</a>
  </li>
 
</ul>
    <form class="d-flex">
      <a class="btn btn-outline-success" type="submit" onclick="openRightMenu()"><i class="fa fa-fw fa-user"></i>Admin Login</a>
    </form>
  </div>
</nav>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
   </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="image/background.jpg" class="d-block w-100" height="350px" alt="...">
      <div class="carousel-caption d-md-block text-white">
    <h2 class="text-white">Welcome to Nepal voting system</h2>
    <p class="text-white">Some representative placeholder content for the first slide.</p>
</div>

    </div>
    </div>
</div>
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="card-header">
            <marquee style="color:red; "> you can only vote one candiate only</marquee>
         </div>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color:blue; ">Voter details</h5>
        <p class="card-text">Name:</p>
        <h5 class="card-title">Status</h5>
      </div>
    </div>
  </div>
</div>


        </div>
        <div class="col-sm-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">candiate details</th>
      <th scope="col">Symbol</th>
      <th scope="col">photo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>

</div>

<script>

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
</body>
</html>