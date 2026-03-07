<?php
$current = basename($_SERVER['PHP_SELF']); // e.g. events.php
function active($page, $current) {
  return $page === $current ? 'active' : '';
}
?>

<header class="navbar">
  <div class="logo">
  <a href="dashboard.php">
    <img src="Image/logo.png" alt="EcoEvents Logo" class="logo-img">
    </a>
  </div>
  

  <nav class="nav-links">
    <a href="dashboard.php" class="<?= active('dashboard.php', $current) ?>">Home</a>
    <a href="" class="<?= active('', $current) ?>">Events</a>
    <a href="" class="<?= active('', $current) ?>">About</a>
    <a href="" class="<?= active('', $current) ?>">View Feedback</a>
  </nav>

  <div class="nav-right">
    <a href="profile.php" class="profile-wrapper">
      <span class="profile-circle"></span>
      <span class="nav-profile-name">Participant</span>
    </a>
    <a href="#" class="logout">Logout</a>
  </div>
</header>