<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Business</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Finance</a>
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
      </ul>
    </div>
  </div>
</nav>