<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'scss/style.scss'])
</head>
<body
{{-- style="background-image: url(https://cbeyondata.com/wp-content/uploads/2020/10/iStock-1237546531-1920x1280.jpg)" --}}
>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">Catalin 2023</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Meniu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " aria-current="page" href="about">
                    About
                  </a>

                </li>
              </ul>

            </div>
          </div>
        </div>
      </nav>




  <footer class="bg-dark text-center text-lg-start" style="bottom: 0%; position:absolute;width:100%">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #212529 ;color:white">
      © 2023 Copyright:
      <a class="text-white" href="#">Cretu Catalin</a>
    </div>
    <!-- Copyright -->
  </footer>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
@yield('content')
