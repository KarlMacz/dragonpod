<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
  <a href="./" class="navbar-brand"><img src="assets/img/logo.png" class="d-inline-block align-top" style="height: 36px;"> <?php echo config('app.name'); ?></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navbar-menu" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="./" class="nav-link">Book Now</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" data-toggle="dropdown">Reservation</a>
        <div class="dropdown-menu">
          <a href="rebooking.php" class="dropdown-item">Rebooking</a>
          <a href="cancellation.php" class="dropdown-item">Cancellation</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#login-modal" data-toggle="modal">Log In</a>
      </li>
    </ul>
  </div>
</nav>
