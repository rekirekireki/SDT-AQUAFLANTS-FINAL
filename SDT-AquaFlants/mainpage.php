<?php
session_start();
if (!isset($_SESSION["userID"])) {
	header("location: index.php");
	die();
}

$user_id = $_SESSION['userID'];
include_once("connection.php");
?>

<?php
$latest_date = date('Y-m-d'); // Get current date in YYYY-MM-DD format
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
	<script src='js/dist/index.global.js'></script>

	<style>
		#calendar {
			max-width: 1100px;
			margin: 0 auto;
			background-color: white;
		}

		#external-events {
			margin: 0 auto;
			width: 100%;
			max-width: 300px;
			margin-top: 50px;
		}

		.form-group {
			margin-bottom: 20px;
		}

		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"],
		textarea {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f1f1f1;
		}

		input[type="datetime-local"],
		input[type="file"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f1f1f1;
			height: 40px;
		}

		input[type="checkbox"] {
			margin-right: 10px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			font-size: 18px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		select {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f1f1f1;
			height: 40px;
			margin-bottom: 20px;
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

		<div id="external-events">
			<form method="POST" action="save_events.php"  enctype="multipart/form-data">
				<div class="form-group">
					<label for="event-name">Event Name:</label>
					<input type="text" id="event-name" name="title" required>
				</div>

				<div class="form-group">
					<label for="start-date">Start Date:</label>
					<input type="datetime-local" id="start-date" name="start_datetime" required>
				</div>

				<div class="form-group">
					<label for="end-date">End Date:</label>
					<input type="datetime-local" id="end-date" name="end_datetime" required>
				</div>

				<div class="form-group">
					<label for="description">Description:</label><br>
					<textarea id="description" name="description" rows="4" cols="50"></textarea>
				</div>

				<div class="form-group">
					<label for="water">Water:</label>
					<select id="water" name="event-watered">
						<option value="Hadn't Received Water Yet">Hadn't Received Water Yet</option>
						<option value="Water Received">Water Received</option>
					</select>
				</div>

				<div class="form-group">
					<label for="sunlight">Sunlight:</label>
					<select id="sunlight" name="event-sunlight">
						<option value="Hadn't Received Sunlight Yet">Hadn't Received Sunlight Yet</option>
						<option value="Sunlight Received">Sunlight Received</option>
					</select>
				</div>

				<div class="form-group">
					<label for="image-upload">Image Upload:</label>
					<input type="file" id="image-upload" name="event-image" required>
				</div>

				<input type="submit" value="Submit">
			</form>
		</div>

		<div id='calendar'></div>

		<div id="eventModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="eventModalTitle"></h5>
						<button type="button" class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<p>Start time: <span id="eventModalStart"></span></p>
								<p>End time: <span id="eventModalEnd"></span></p>
							</div>
							<div class="col-md-6">
							<img id="eventModalImage" src="Plants/<?php echo $event['plantImg']; ?>" alt="Plant Picture" class="img-fluid" width="500">
							</div>
						</div>
						<div class="form-group">
							<label for="eventModalDescription">Description</label>
							<textarea id="eventModalDescription" class="form-control" readonly></textarea>
						</div>
						<div class="form-group">
							<p>Sunlight Status: <span id="eventModalSunlight"></span></p>
						</div>
						<div class="form-group">
							<p>Water Status: <span id="eventModalWatered"></span></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<div id="eventModalID" hidden></div>
							<button id="delete" type="button" class="btn btn-danger">Delete</button>
						</div>
					</div>
					<script>
						$(document).on('click', '.fc-event', function() {
							$('#eventModalTitle').html($(this).data('title'));
							$('#eventModalStart').html($(this).data('start'));
							$('#eventModalEnd').html($(this).data('end'));
							$('#eventModalImage').attr('src', $(this).data('image'));
							$('#eventModalDescription').html($(this).data('description'));

							// Retrieve the sunlight and watered data
							var sunlightStatus = $(this).data('sunlight');
							var wateredStatus = $(this).data('watered');
							$('#eventModal').modal('show');
						});
					</script>
				</div>
			</div>
		</div>


		<?php
		include_once("connection.php");

		// Prepare the statement with a placeholder for the user ID
		$stmt = $pdo->prepare("SELECT * FROM userevents WHERE userID = ?");
		$stmt->execute([$user_id]);

		$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$formatted_events = [];
		foreach ($events as $event) {
			$formatted_events[] = [
				'id' => $event['eventID'],
				'title' => $event['eventName'],
				'start' => date('Y-m-d\TH:i:s', strtotime($event['start_Date'])),
				'end' => date('Y-m-d\TH:i:s', strtotime($event['end_date'])),
				'timezone' => 'UTC',
				'description' => $event['description'],
				'image' => $event['plantImg'], // Change '.jpg' to the actual file extension of your image
				'watered' => $event['watered'],
				'sunlight' => $event['sunlight']
			];
		}

		// Pass the formatted events to the FullCalendar constructor
		echo "<script>console.log('User ID:', " . json_encode($formatted_events) . ");</script>";;
		?>

		<script>
			var scheds = $.parseJSON('<?= json_encode($formatted_events) ?>')
		</script>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var calendarEl = document.getElementById('calendar');

				var calendar = new FullCalendar.Calendar(calendarEl, {
					initialDate: '<?php echo $latest_date; ?>',
					events: <?php echo json_encode($formatted_events); ?>,
					headerToolbar: {
						start: 'prev,next today',
						center: 'title',
						end: 'dayGridMonth,timeGridWeek,timeGridDay'
					},

				});

				calendar.on('eventClick', function(info) {
					$('#eventModalID').text(info.event.id);
					$('#eventModalTitle').text(info.event.title);
					$('#eventModalStart').text(moment(info.event.start).format('MMMM Do YYYY, h:mm:ss a'));
					$('#eventModalEnd').text(moment(info.event.end).format('MMMM Do YYYY, h:mm:ss a'));
					$('#eventModalImage').attr('src', info.event.extendedProps.image);
					$('#eventModalDescription').val(info.event.extendedProps.description);
					$('#eventModalWatered').text(info.event.extendedProps.watered);
					$('#eventModalSunlight').text(info.event.extendedProps.sunlight);
				});

				calendar.render();
			});
		</script>
		<script>
			$('#delete').click(function() {
				var id = $('#eventModalID').text(); // get ID from modal
				if (!!id) {
					var _conf = confirm("Are you sure to delete this scheduled event?");
					if (_conf === true) {
						location.href = "./delete-event.php?id=" + id;
					}
				} else {
					alert("Event is undefined");
				}
			});
		</script>


</body>

<script src="mainpage.js"></script>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

</body>

</html>