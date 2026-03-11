<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="Dashboard">
<?php 
include("header.php"); 
?>

<main class="container profile-page">

  <h1 class="profile-title">Profile</h1>

  <section class="profile-card">

    <!-- Top header area -->
    <div class="profile-top">
      <div class="profile-avatar"></div>
      <div class="profile-name">Name</div>
    </div>

    <!-- Big account details block -->
    <div class="profile-block">
      <div class="profile-block-title">Account Details</div>
      <div class="profile-block-body">
        <div class="profile-row"><span>Username:</span><span>namename</span></div>
        <div class="profile-row"><span>Full Name:</span><span>fullname</span></div>
        <div class="profile-row"><span>Phone:</span><span>+60123456789</span></div>
        <div class="profile-row"><span>Email:</span><span>name@gmail.com</span></div>
      </div>
    </div>

    <!-- Lower 2-column -->
    <div class="profile-grid">

      <div class="profile-block">
        <div class="profile-block-title">Account Details</div>
        <div class="profile-block-body">
          <div class="profile-row"><span>Username:</span><span>namename</span></div>
          <div class="profile-row"><span>Full Name:</span><span>fullname</span></div>
          <div class="profile-row"><span>Account Status:</span><span>Active</span></div>
        </div>
      </div>

    </div>

    <!-- Bottom actions -->
    <div class="profile-actions">
      <button class="profile-action-btn">Log Out</button>
    </div>

  </section>
  </main>
  
<?php include("footer.php"); ?>

</body>
</html>
