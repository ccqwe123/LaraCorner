<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Guide</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="icon" type="image/png" href="https://cdn.phcorner.net/styles/default/phcorner/logo/phc_32px.png" sizes="32x32" />
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md nav-custom-color header-content">
    <div class="container">
      <a href="/" class="navbar-brand a-link">
        <img src="{{ asset('image/phcorner-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LaraCorner</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle a-link">CRUD</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Basic</a></li>
              <li><a href="#" class="dropdown-item">Vue</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle a-link">Database</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Migration</a></li>
              <li><a href="#" class="dropdown-item">Seeder</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="https://phcorner.net/members/spleken001.628608/" class="nav-link a-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="content-wrapper text-dark bg-dark ">
      @yield('content')
  </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
