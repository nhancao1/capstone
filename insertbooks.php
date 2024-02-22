<!DOCTYPE html>
<html>

<head>
	<title>Insert books page</title>
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
		$publication_date = $_REQUEST['publication_date'];
		$description = $_REQUEST['description'];
		$publisher = $_REQUEST['publisher'];
		$language = $_REQUEST['language'];
		$contributor = $_REQUEST['contributor'];
		$subject = $_REQUEST['subject'];
		$rights = $_REQUEST['rights'];
		$format = $_REQUEST['format'];
		$keywords = $_REQUEST['keywords'];
		$summary = $_REQUEST['summary'];
		$requester_id = $_REQUEST['requester_id'];
		
		// Performing insert query execution
		// here our table name is books
		//$sql = "INSERT INTO books VALUES ('$title', 
		//	'$creator')";
		
		/*
		<form action="insertbooks.php" method="POST">
		<label for="title">Title:</label>
		<input type="text" id="title" name="title">
		<label for="creator">Creator(s):</label>
		<input type="text" id="creator" name="creator">
		<label for="identifier">Identifier (ISBN):</label>
		<input type="text" id="identifier (ISBN)" name="identifier">
		<label for="publication_date">Publication Date:</label>
		<input type="date" id=pub_date name="publication_date">
		<label for="description">Description:</label>
		<input type="text" id="description" name="description">
		<label for="publisher">Publisher:</label>
		<input type="text" id="publisher" name="publisher">
		<label for="language">Language:</label>
		<select id="language" name="language">
		  <option value="Select">Select</option>
		  <option value="English">English</option>
		  <option value="French">French</option>
		  <option value="Other">Other</option>
		</select>
		<label for="contributor">Contributor(s):</label>
		<input type="text" id="contributor" name="contributor">
		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject">
		<label for="rights">Rights:</label>
		<input type="text" id="rights" name="rights">
		<label for="format">Format:</label>
		<input type="text" id="format" name="format">
		<label for="keywords">Keywords:</label>
		<input type="text" id="keywords" name="keywords">
		<label for="summary">Summary:</label>
		<input type="text" id="summary" name="summary">
		<label for="requester_id">Requester id: </label>
		<input type="text" id="requester_id" name="requester_id">*/


		// Performing insert query execution using prepared statement
		
		// We are going to insert the data into our sampleDB table
		$sql = "INSERT INTO books VALUES ('$title', '$creator','$identifier','$publication_date','
		$description', '$publisher', '$language', '$contributor', '$subject', '$rights', '$format', '$keywords', '$summary', '$requester_id')";

		// Check if the query is successful
		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$title\n $creator\n "
				. "$identifier\n $publication_date\n $description\n $publisher\n $language\n $contributor\n $subject\n $rights\n $format\n $keywords\n $summary\n $requester_id");
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