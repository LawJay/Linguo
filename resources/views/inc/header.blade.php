<?php
$user = Auth::user();
 ?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('dashboard')}}">Linguo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="material-icons">supervisor_account</i> Profile</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#"><i class="material-icons">contact_support</i>Help</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">language</i> Discover
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Interests</a>
          <a class="dropdown-item" href="#">Languages</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('online')}}">Online Users</a>
        </div>
      </li>
    </ul>
    
      
    <a class="nav-link" href="{{route('account')}}"><i class="material-icons">perm_identity</i></a>
    <a class="nav-link" href="{{route('logout')}}">Logout</a>


  </div>
</nav>
	
</header>