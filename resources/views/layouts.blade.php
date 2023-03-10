<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/style.scss'])
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top bg-dark " data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item-white">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item-light">
                <a class="nav-link" href="#">Link</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>





<div class="container" >
    @yield('content')
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="height:490px">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="https://images.unsplash.com/photo-1507090960745-b32f65d3113a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXJiYW58ZW58MHx8MHx8&w=1000&q=80">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

