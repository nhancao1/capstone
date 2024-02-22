<!DOCTYPE html>
<html>

<head>
	<title>Insert journals page</title>
</head>

<body>
	<center>
		<?php
		// source: https://dev.to/anthonys1760/how-to-insert-form-data-into-a-database-using-html-php-2e8
		// servername => localhost
		// username => root
		// password => empty
		// database name => library
		$conn = mysqli_connect("localhost", "root", "", "library");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all values from the form data (input)
		$title = $_REQUEST['title'];
		$creator = $_REQUEST['creator'];
		$identifier = $_REQUEST['identifier'];
		$DOI = $_REQUEST['DOI'];
		$vol_num = $_REQUEST['vol_num'];
		$issue_num = $_REQUEST['issue_num'];
		$page_range = $_REQUEST['page_range'];
		$type = $_REQUEST['type'];
		$description = $_REQUEST['description'];
		$publication_date = $_REQUEST['publication_date'];
		$keywords = $_REQUEST['keywords'];
		$summary = $_REQUEST['summary'];
		$requester_id = $_REQUEST['requester_id'];


		/*
		<form action="insertjournals.php" method="POST">
		  <label for="title">Title:</label>
		  <input type="text" id="title" name="title">
		  <label for="creator">Creator(s):</label>
		  <input type="text" id="creator" name="creator">
		  <label for="identifier">Identifier (ISSN):</label>
		  <input type="text" id="identifier (ISSN)" name="identifier">
		  <label for="DOI">DOI:</label>
		  <input type="text" id="DOI" name="DOI">
		  <label for="vol_num">Volume number:</label>
		  <input type="number" id="vol_num" name="vol_num" placeholder="positive number">
		  <label for="issue_num">Issue number:</label>
		  <input type="number" id="issue_num" name="issue_num" placeholder="positive number">
		  <label for="page_range">Page range:</label>
		  <input type="text" id="page_range" name="page_range">
		  <label for="type">Type:</label>
		  <input type="type" id="type" name="type">
		  <label for="description">Description:</label>
		  <input type="text" id="description" name="description">
		  <label for="pub_date">Publication Date:</label>
		  <input type="date" id=pub_date name="publication_date">
		  <label for="keywords">Keywords:</label>
		  <input type="text" id="keywords" name="keywords">
		  <label for="summary">Summary:</label>
		  <input type="text" id="summary" name="summary">*/

		// Performing insert query execution
		// here our table name is journals
		//$sql = "INSERT INTO journals VALUES ('$title', 
		//	'$creator')";
		
		// Performing insert query execution using prepared statement
		
		// We are going to insert the data into our sampleDB table
		$sql = "INSERT INTO journals VALUES ('$title', '$creator','$identifier','$DOI', '$vol_num', '$issue_num', 
		'$page_range', '$type', '$description', '$publication_date','$keywords', '$summary', '$requester_id')";

		// Check if the query is successful
		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$title\n $creator\n $identifier\n"
			. "$DOI\n $vol_num\n $issue_num\n $page_range\n $type\n $description\n $publication_date\n $keywords\n $summary\n $requester_id");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>

	</center>
</body>

</html>