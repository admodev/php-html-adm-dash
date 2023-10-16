<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="business">My Business</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="finance">Finance</a>
        </li>
        <li class="nav-item">
          <div class="dropdown-center">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Notifications
            </button>
            <ul class="dropdown-menu">
              <?php
              foreach ($example as $notification) {
              ?> <li><a class="dropdown-item" href="#"><?php echo "<b>From: </b>" . $notification['person'] . "<b> Message: </b>" . $notification['message']; ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>