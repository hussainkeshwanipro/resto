<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resto App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Resto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('list') }}">List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('add') }}">Add</a>
                  </li>
                  @if (Session::has('user'))
                  <li class="nav-item">
                    <a class="nav-link" href='#'>Welcome {{ Session::get('user') }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='{{ route('logout') }}'>Logout</a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='{{ url('register') }}'>Register</a>
                  </li>
                  @endif 
                </ul>
              </div>
            </div>
          </nav>
          
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        {{-- Copy Right by Resto App --}}
    </footer>
</body>
</html>