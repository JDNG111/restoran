<!DOCTYPE html>
<html lang="en">
<head>
<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.stat-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}

.stat-icon {
    transition: transform 0.3s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1);
}

.avatar {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}

.table th {
    font-weight: 600;
    color: #6c757d;
    border-bottom-width: 1px;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}

.card {
    border-radius: 15px;
    overflow: hidden;
}

.welcome-card {
    border-radius: 20px !important;
}
</style>

    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{asset('assets/styles/style.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        @auth('admin')
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="{{route ('admins.dashboard')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admins.all')}}" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('orders.all')}}" style="margin-left: 20px;">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('all.foods')}}" style="margin-left: 20px;">Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bookings.all')}}" style="margin-left: 20px;">Bookings</a>
          </li>
        </ul>
        @endauth
        <ul class="navbar-nav ml-md-auto d-md-flex">
          @auth('admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route ('admins.dashboard')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::guard('admin')->user()->name ?? 'Admin' }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('admin.logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form-admin').submit();">
            Logout
        </a>
        <form id="logout-form-admin" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
          @else
                  <li class="nav-item">
            <a class="nav-link" href="{{route ('view.login')}}">login
            </a>
          </li>        
          @endauth
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">

            <main class="py-4">
            @yield('content')
        </main>

        </div>
    </div>
  </div>
<script type="text/javascript">

</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')
</body>
</html>