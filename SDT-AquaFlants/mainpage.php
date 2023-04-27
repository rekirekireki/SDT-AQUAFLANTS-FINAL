<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.html");
	die();
}
include_once("connection.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>AquaFlants</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="calendar.css">
	<link href="/docs/dist/demo-to-codepen.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
	<script src="/docs/dist/demo-to-codepen.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var Calendar = FullCalendar.Calendar;
			var Draggable = FullCalendar.Draggable;

			var containerEl = document.getElementById('external-events');
			var calendarEl = document.getElementById('calendar');
			var checkbox = document.getElementById('drop-remove');

			// initialize the external events
			// -----------------------------------------------------------------

			new Draggable(containerEl, {
				itemSelector: '.fc-event',
				eventData: function(eventEl) {
					return {
						title: eventEl.innerText
					};
				}
			});

			// initialize the calendar
			// -----------------------------------------------------------------

			var calendar = new Calendar(calendarEl, {
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay'
				},
				editable: true,
				droppable: true, // this allows things to be dropped onto the calendar
				drop: function(info) {
					// is the "remove after drop" checkbox checked?
					if (checkbox.checked) {
						// if so, remove the element from the "Draggable Events" list
						info.draggedEl.parentNode.removeChild(info.draggedEl);
					}
				}
			});

			calendar.render();
		});
	</script>
</head>

<body>
	<!-- Top Navigation Bar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; AquaFlants</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
						Plants
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Angiosperms</a>
						<a class="dropdown-item" href="#">Ferns</a>
						<a class="dropdown-item" href="#">Succulents</a>
						<a class="dropdown-item" href="#">Epiphytes</a>
						<a class="dropdown-item" href="#">House Plants</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" action="search.php" method="post">
				<input class="form-control mr-sm-2" maxlength="50" type="search" placeholder="Search" aria-label="Search" name="search" required>
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<!-- Side Menu -->
	<div class="sayd">
		<div id="mySidenav" class="sidenav">
			<a href="#">Home</a>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">Profile</a>
			<a href="#">Blog</a>
			<a href="index.html">Signout</a>
		</div>

		<!-- Page Content -->
		<div class="container-fluid" style="margin-top: 80px;">
			<h1>Welcome to AquaFlants!</h1>

		</div>

		<div id="external-events">
			<p>
				<strong>Draggable Events</strong>
			</p>

			<div id="external-events">
				<form action="save_events.php" method="POST">
					<p>
						<strong>Draggable Events</strong>
					</p>

					<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
						<input type="hidden" name="event_title[]" value="Water">
						<div class="fc-event-main">Water</div>
					</div>
					<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
						<input type="hidden" name="event_title[]" value="Sunlight">
						<div class="fc-event-main">Sunlight</div>
					</div>
					<button type="submit" class="btn btn-primary">Save Events</button>
				</form>
			</div>

			<p>
				<input type="checkbox" id="drop-remove">
				<label for="drop-remove">remove after drop</label>
			</p>
		</div>
		<div id='calendar-container'>
			<div id='calendar'></div>
		</div>

		<script src="mainpage.js"></script>
</body>

</html>