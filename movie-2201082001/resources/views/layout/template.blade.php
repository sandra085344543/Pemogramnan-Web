<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiMovie - @yield('title', 'Homepage')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-color: rgb(96, 141, 179); color: black;" >
    <nav class="navbar navbar-expand-lg class="btn" style="background-color: rgb(32, 175, 222); color: black;" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">tiMovie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/watchlist">Watchlist</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container my-2">
        @yield('content')
      </div>

      <footer class="bg" style="background-color:rgb(32, 175, 222); text-align:center; padding:3px;"  >
        Copyright &copy; {{ date('Y') }} by Amalia Yosandra
      </footer>
    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
