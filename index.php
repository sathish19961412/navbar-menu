<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"> 
  </head>
  <style>
   .navbar-nav li:hover > ul.dropdown-menu {
      display: block;
   }
    .dropdown-submenu {
        position:relative;
    }
    .dropdown-submenu>.dropdown-menu {
        top:0;
        left:100%;
        margin-top:-6px;
    }

    /* rotate caret on hover */
    .dropdown-menu > li > a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
    } 

  </style>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand pb-2" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapsenavbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu</a></li>
                            <li><a class="dropdown-item" href="#">Submenu0</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                    <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>