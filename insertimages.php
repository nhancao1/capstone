<!DOCTYPE html>
<html>

<head>
    <title>Insert images page</title>
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
        $description = $_REQUEST['description'];
        $location = $_REQUEST['location'];
        $publication_date = $_REQUEST['publication_date'];
        $format = $_REQUEST['format'];
        $language = $_REQUEST['language'];
        $subject = $_REQUEST['subject'];
        $rights = $_REQUEST['rights'];
        $type = $_REQUEST['type'];
        $keywords = $_REQUEST['keywords'];
        $summary = $_REQUEST['summary'];
        $requester_id = $_REQUEST['requester_id'];

        // Performing insert query execution
        // here our table name is images
        //$sql = "INSERT INTO images VALUES ('$title', 
        //	'$creator')";
        
        /*    
        <form action="insertimages.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            <label for="creator">Creator(s):</label>
            <input type="text" id="creator" name="creator">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location">
            <label for="pub_date">Publication Date:</label>
            <input type="date" id=pub_date name="publication date">
            <label for="format">Format:</label>
            <input type="text" id="format" name="format">
            <label for="language">Language:</label>
            <select id="language" name="language">
            <option value="Select">Select</option>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Other">Other</option>
            </select>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject">
            <label for="rights">Rights:</label>
            <input type="text" id="rights" name="rights">
            <label for="rights">Type:</label>
            <input type="text" id="type" name="type">
            <label for="keywords">Keywords:</label>
            <input type="text" id="keywords" name="keywords">
            <label for="summary">Summary:</label>
            <input type="text" id="summary" name="summary">
            <label for="requester_id">Requester id: </label>
            <input type="text" id="requester_id" name="requester_id">*/


        // Performing insert query execution using prepared statement
        
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO images VALUES ('$title', '$creator', '$description', '$location', '$publication_date',
		'$format', '$language', '$subject', '$rights', '$type', '$keywords', '$summary', '$requester_id')";

        // Check if the query is successful
        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$title\n $creator\n "
                . "$description\n $location\n $publication_date\n $format\n $language\n $subject\n $rights\n $type\n $keywords\n $summary\n $requester_id");
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