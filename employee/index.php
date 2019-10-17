<?php
  include_once('layouts/header.php');
?>

<div class="bs-dashboard">
  <div class="bs-dashboard-sidebar">
    <div>
      <div class="bs-dashboard-sidebar-header">Menu</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action active" href="#">
          <h5 class="my-0">Dashboard</h5>
        </a>
        <a class="list-group-item list-group-item-action" href="accommodations.php">
          <h5 class="my-0">Accomodations</h5>
          <p class="my-0">
            <small>Create and/or manage accommodations.</small>
          </p>
        </a>
        <a class="list-group-item list-group-item-action" href="guests.php">
          <h5 class="my-0">Guests</h5>
          <p class="my-0">
            <small>View, add, edit, and/or delete registered guests' information.</small>
          </p>
        </a>
        <a class="list-group-item list-group-item-action" href="rooms.php">
          <h5 class="my-0">Rooms</h5>
          <p class="my-0">
            <small>View, add, edit, and/or delete rooms.</small>
          </p>
        </a>
        <a class="list-group-item list-group-item-action" href="pools.php">
          <h5 class="my-0">Pools</h5>
          <p class="my-0">
            <small>View, add, edit, and/or delete pools.</small>
          </p>
        </a>
        <a class="list-group-item list-group-item-action" href="add_ons.php">
          <h5 class="my-0">Add-ons</h5>
          <p class="my-0">
            <small>View, add, edit, and/or delete add-ons.</small>
          </p>
        </a>
        <a class="list-group-item list-group-item-action" href="reports.php">
          <h5 class="my-0">Reports</h5>
          <p class="my-0">
            <small>Generate and print system-generated reports.</small>
          </p>
        </a>
      </div>
    </div>
    <?php
      if(Auth::user()->type === 'Administrator') {
    ?>
    <div>
      <div class="bs-dashboard-sidebar-header">Administrative Tools</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action" href="reports.php">
          <h5 class="my-0">System Configuration</h5>
          <p class="my-0">
            <small>Tweak different system values.</small>
          </p>
        </a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <div class="bs-dashboard-content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <a href="./" class="navbar-brand"><img src="../assets/images/logo.png" class="d-inline-block align-top" style="height: 36px;"> <?php echo config('app.name'); ?></a>
      <div id="navbar-menu" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->full_name; ?></a>
            <div class="dropdown-menu">
              <a href="change_password.php" class="dropdown-item">Change Password</a>
              <a href="../logout.php" class="dropdown-item">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="bs-dashboard-content-inner">
    </div>
  </div>
</div>

<?php
  include_once('layouts/shared_modals.php');
  include_once('layouts/footer.php');
?>
