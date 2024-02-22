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
        $directors = $_REQUEST['directors'];
        $producers = $_REQUEST['producers'];
        $actors = $_REQUEST['actors'];
        $release_year = $_REQUEST['release_year'];
        $identifier = $_REQUEST['identifier'];
        $description = $_REQUEST['description'];
        $language = $_REQUEST['language'];
        $contributor = $_REQUEST['contributor'];
        $genre = $_REQUEST['genre'];
        $rights = $_REQUEST['rights'];
        $type = $_REQUEST['type'];
        $format = $_REQUEST['format'];
        $keywords = $_REQUEST['keywords'];
        $summary = $_REQUEST['summary'];
        $requester_id = $_REQUEST['requester_id'];

        // Performing insert query execution
        // here our table name is videos
        //$sql = "INSERT INTO videos VALUES ('$title', 
        //	'$creator')";
        
        /*    
        <form action="insertvideos.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <label for="directors">Directors:</label>
        <input type="text" id="directors" name="directors">
        <label for="products">Producers:</label>
        <input type="text" id="producers" name="producers">
        <label for="actors">Actors:</label>
        <input type="text" id="actors" name="actors">
        <label for="release_year">Release Year:</label>
        <input type="text" id="release_year" name="release_year">
        <label for="identifier">Identifier:</label>
        <input type="text" id="identifier" name="identifier">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description">
        <label for="language">Language:</label>
        <select id="language" name="language">
        <option value="Select">Select</option>
        <option value="English">English</option>
        <option value="French">French</option>
        <option value="Other">Other</option>
        </select>
        <label for="creator">Contributor</label>
        <input type="text" id="contributor" name="contributor">
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre">
        <label for="rights">Rights:</label>
        <input type="text" id="rights" name="rights">
        <label for="rights">Type:</label>
        <input type="text" id="type" name="type">
        <label for="format">Format:</label>
        <input type="text" id="format" name="format">
        <label for="keywords">Keywords:</label>
        <input type="text" id="keywords" name="keywords">
        <label for="summary">Summary:</label>
        <input type="text" id="summary" name="summary">*/

        // Performing insert query execution using prepared statement
        
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO videos VALUES ('$title', '$directors', '$producers', '$actors', '$release_year',
		'$identifier', '$description', '$language', '$contributor', '$genre', '$rights', '$type', '$format', '$keywords', '$summary', '$requester_id')";

        // Check if the query is successful
        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$title\n $directors\n "
                . "$producers\n $actors\n $release_year\n $identifier\n $description\n $language\n $contributor\n $genre\n $rights\n $type\n $format\n $keywords\n $summary\n $requester_id");
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