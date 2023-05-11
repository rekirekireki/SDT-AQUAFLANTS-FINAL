<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.html");
	die();
}
include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="landingpage.css">

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

	<style>
		#external-events {
			position: fixed;
			z-index: 2;
			top: 100px;
			left: 20px;
			width: 150px;
			padding: 0 10px;
			border: 1px solid #ccc;
			background: white;
		}

		#calendar {
			max-width: 1100px;
			margin: 20px auto;
			background-color: white;
		}
	</style>
</head>

<body>
	<video id="bg-video" autoplay muted loop>
		<source src="bgvid.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="pageOne">
		<!-- NAVIGATION BAR -->
		<div class="navBar">
			<ul>
				<li class="title"><a>AquaFlants</a></li>
				<li class="interact"><a href="landingpage.php">Home</a></li>
				<li class="interact"><a href="view.php">View Plants</a></li>
				<li class="interact"><a href="writer.php">Add Plants</a></li>
				<li class="title">
					<a>
						<form action="search.php" method="post">
							<input class="search" type="text" name="search" placeholder="Search a Plants...">
						</form>
					</a>
				</li>
				<li class="interact" style="float:right"><a class="active" href="logout.php">Log-out</a></li>
			</ul>
		</div>



		<!-- BODY, DITO KAYO MAG LAGAY NG CONTENT -->
		<div class="parentCont1">

			<div id="external-events">

				<div id="external-events">
					<form action="save_events.php" method="POST">
						<p>
							<strong>Draggable Events</strong>
						</p>

						<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
							<input type="hidden" name="event_title[]" value="Water">
							<div class="fc-event-main">Watered</div>
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
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>