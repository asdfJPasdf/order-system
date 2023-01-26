<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
 <!-- Collapsible wrapper -->
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="../"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
    
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ?>/food">Speisekarte</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      
      <ul class="navbar-nav">
      <!-- Avatar -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>Eingelogt als: <?php echo $username?></li>
            <li><a class="dropdown-item" href="<?php echo $url ?>/login"><button class="btn" onclick="return confirm('Wollen Sie sich wirklich ausloggen?')">Ausloggen <i class="bi bi-box-arrow-right"></i></button></a></li>
          </ul>
        </li>
       
      
      
    </div>
    <a href="<?php echo $url?>/food"><button class="btn btn-primary">neue Bestellung</button></a>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->