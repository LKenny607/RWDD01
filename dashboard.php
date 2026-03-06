<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoEvents | Events</title>

  <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="Dashboard">

<?php include("header.php"); ?>

<div class="EventDiscrption">
  
  <div class="EventDiscrption-text">
    <h1>Organizer Dashboard</h1>
    <p>Manage your sustainable events</p>
  </div>


<!-- zayzay start -->
<!-- Create Event button -->
  <a href="#" id="openCreateModal" class="btn"><b>＋ Create Event</b></a>
  <?php include("CreateEvent.php"); ?>

<script src="js/main.js"></script>

<script>
// Get modal and buttons
const modal = document.getElementById('createEventModal');
const openBtn = document.getElementById('openCreateModal');
const closeBtn = document.querySelector('.close');
const cancelBtn = document.getElementById('cancelBtn');
const form = document.getElementById('createEventForm');

// Open modal
openBtn.addEventListener('click', (e) => {
  e.preventDefault(); // stop page jump
  modal.style.display = 'flex';
  document.body.classList.add('modal-open');
});

// Close modal function
function closeModal() {
  modal.style.display = 'none';
  form.reset(); // optional: clear form when closing
  document.body.classList.remove('modal-open');
}

// Close with X
closeBtn.addEventListener('click', closeModal);

// Cancel button
cancelBtn.addEventListener('click', closeModal);

// Close when clicking outside
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    closeModal();
  }
});
</script>
<!-- zayzay end -->

</div>

<div class="stats">
    <div class="stat-card"><h3>My Events</h3><span>4</span></div>
    <div class="stat-card"><h3>Total Participants</h3><span>75</span></div>
    <div class="stat-card"><h3>Pending Approval</h3><span>1</span></div>
    <div class="stat-card"><h3>Approved Events</h3><span>2</span></div>
</div>

<div class="tabs">
    <div class="tab active">All Events (4)</div>
    <div class="tab">Pending (1)</div>
    <div class="tab">Approved (2)</div>
    <div class="tab">Rejected (1)</div>
</div>

<!-- event test  -->
<div class="events">

<div class="event-card">
    <div class="event-image">
        <div class="badge">Cleanup</div>
        <div class="status">Approved</div>
    </div>
    <div class="event-content">
        <h3>Beach Cleanup Drive</h3>
        <p>Join us for a community beach cleanup to protect marine life.</p>
        <div class="event-info">📅 Jan 25, 2026</div>
        <div class="event-info">📍 Sunset Beach</div>
        <div class="event-footer">
            <span class="rating">⭐ 4.8</span>
            <button class="view-btn">View Details</button>
        </div>
    </div>
</div>

<div class="event-card">
    <div class="event-image">
        <div class="badge">Plantation</div>
        <div class="status">Approved</div>
    </div>
    <div class="event-content">
        <h3>Urban Tree Plantation</h3>
        <p>Help us plant 200 native trees in the city park.</p>
        <div class="event-info">📅 Feb 10, 2026</div>
        <div class="event-info">📍 Central City Park</div>
        <div class="event-footer">
            <span class="rating">⭐ 4.9</span>
            <button class="view-btn">View Details</button>
        </div>
    </div>
</div>

<div class="event-card">
    <div class="event-image">
        <div class="badge">Workshop</div>
        <div class="status pending">Pending</div>
    </div>
    <div class="event-content">
        <h3>Recycling Workshop</h3>
        <p>Learn creative ways to recycle and upcycle everyday items.</p>
        <div class="event-info">📅 Feb 20, 2026</div>
        <div class="event-info">📍 Community Center</div>
        <div class="event-footer">
            <span class="rating">⭐ 4.6</span>
            <button class="view-btn">View Details</button>
        </div>
    </div>
</div>
</div>
<!-- event test  -->

<?php include("footer.php"); ?>

</body>
</html>
