<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h4 class="text-light">Nine & Kao Shop</h4></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="order.php"><button class="btn btn-default text-white" type="button">Cart</button></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="signup.php"><button class="btn btn-outline-light" type="button">สวัสดี <?php echo $_SESSION['sess_name']; ?></button></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="vote.php">Vote</a>
          <hr>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
