<!DOCTYPE html>
<html>

<head>
    <title>Insert dissertations page</title>
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
        $publisher = $_REQUEST['publisher'];
        $publication_date = $_REQUEST['publication_date'];
        $description = $_REQUEST['description'];
        $language = $_REQUEST['language'];
        $contributor = $_REQUEST['contributor'];
        $sources = $_REQUEST['sources'];
        $relation = $_REQUEST['relation'];
        $subject = $_REQUEST['subject'];
        $rights = $_REQUEST['rights'];
        $type = $_REQUEST['type'];
        $coverage = $_REQUEST['coverage'];
        $format = $_REQUEST['format'];
        $keywords = $_REQUEST['keywords'];
        $summary = $_REQUEST['summary'];
        $requester_id = $_REQUEST['requester_id'];

        // Performing insert query execution
        // here our table name is dissertations
        //$sql = "INSERT INTO dissertations VALUES ('$title', 
        //	'$creator')";
        
        /*
        <form action="insertdissertations.php">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title">
          <label for="creator">Creator(s):</label>
          <input type="text" id="creator" name="creator">
          <label for="identifier">Identifier:</label>
          <input type="text" id="identifier" name="identifier">
          <label for="publisher">Publisher:</label>
          <input type="text" id="publisher" name="publisher">
          <label for="pub_date">Publication Date:</label>
          <input type="date" id=pub_date name="publication date">
          <label for="language">Language:</label>
          <select id="language" name="language">
            <option value="Select">Select</option>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Other">Other</option>
          </select>
          <label for="contributor">Contributor:</label>
          <input type="text" id="contributor" name="contributor">
          <label for="sources">Sources:</label>
          <input type="text" id="sources" name="sources">
          <label for="relation">Relation:</label>
          <input type="text" id="relation" name="relation">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject">
          <label for="rights">Rights:</label>
          <input type="text" id="rights" name="rights">
          <label for="type">Type:</label>
          <input type="text" id="type" name="type">
          <label for="coverage">Coverage:</label>
          <input type="text" id="coverage" name="coverage">
          <label for="format">Format:</label>
          <input type="text" id="format" name="format">
          <label for="keywords">Keywords:</label>
          <input type="text" id="keywords" name="keywords">
          <label for="summary">Summary:</label>
          <input type="text" id="summary" name="summary">*/


        // Performing insert query execution using prepared statement
        
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO dissertations VALUES ('$title', '$creator','$identifier', '$publisher', '$publication_date','
		$description', '$language', '$contributor', '$sources', '$relation', '$subject', '$rights', '$type', '$coverage', '$format', '$keywords', '$summary', '$requester_id')";

        // Check if the query is successful
        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$title\n $creator\n "
                . "$identifier\n $publisher\n $publication_date\n $description\n $language\n $contributor\n $sources\n $relation\n $subject\n $rights\n $type\n $coverage\n $format\n $keywords\n $summary\n $requester_id");
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