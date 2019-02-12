<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>

        <div class="d-flex" id="wrapper">

                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                  <div class="sidebar-heading">Start Bootstrap </div>
                  <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">1</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">2</a>
                  </div>
                </div>
                <!-- /#sidebar-wrapper -->
            
                <!-- Page Content -->
                <div id="page-content-wrapper">
            
                  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('movies.index') }}">Movies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('movies.create') }}">Add movie</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            
                  <div class="container-fluid container">
                        @yield('body')
                  </div>
                </div>
                <!-- /#page-content-wrapper -->
            
              </div>
            <!-- /#wrapper -->


</body>
</html>