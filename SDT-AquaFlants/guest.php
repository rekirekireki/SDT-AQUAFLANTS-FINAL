<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guest User Search</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="guest.css">
</head>
<body> 
    
    <!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">AquaFlants</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
            Plants
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Angiosperms</a>
            <a class="dropdown-item" href="#">Ferns</a>
            <a class="dropdown-item" href="#">Succulents</a>
            <a class="dropdown-item" href="#">Epiphytes</a>
            <a class="dropdown-item" href="#">House Plants</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
      <video id="bg-video" autoplay muted loop>
          <source src="bgvid.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>  
    
  <div class="container">
    <h1 class="text-center my-4">AquaFlants</h1>
    <div class="row justify-content-center">
      <div class="col-6">
        <form class="form-inline my-2 my-lg-0" action="searchguest.php" method="post">
				<input class="form-control mr-sm-2" maxlength="50" type="search" placeholder="Search" aria-label="Search" name="search" required>
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
          </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
