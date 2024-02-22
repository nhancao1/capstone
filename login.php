<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST"):
    require_once __DIR__ . "/db_connection.php";
    require_once __DIR__ . "/on_login.php";
    if (isset($conn) && isset($_POST["email"]) && isset($_POST["password"])) {
        $result = on_login($conn);
    }
endif;

function post_value($field)
{
    if (isset($_POST[$field])) {
        echo 'value="' . trim(htmlspecialchars($_POST[$field])) . '"';
        return;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--source: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
    <h1>Login</h1>
    <title>Login Page</title>
</head>


<body>
    <div class="navbar">
        <nav>
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Catalogue<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="books.html">Books</a>
                    <a href="journals.html">Journals</a>
                    <a href="dissertations.html">Dissertations</a>
                    <a href="images.html">Images</a>
                    <a href="videos.html">Videos</a>
                </div>
            </div>
            <input type="text" placeholder="Search">
            <img src="../library/Images/search.svg" alt="logo">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="logout.php">Logout</a>
            <!--<img src="C:\Users\adida\OneDrive - Carleton University\Year 4\Semester 2\IRM4900A (IRM Capstone Project)\IRM Capstone Project Research Paper & Presentation\Work\Code\Toan\Images\search.svg" alt="logo">-->
        </nav>
    </div>

    <div class="container">

        <form action="" method="POST">
            <label for="user_email">Email: <span></span></label>
            <input type="email" class="input" name="email" <?php post_value("email"); ?>-attr-name">

            <label for="user_pass">Password: <span></span></label>
            <input type="password" class="input" name="password" <?php post_value("password"); ?>-attr-name">
            <input type="submit" value="Login">
            <div class="link"><a href="./register.php">Register</a></div>
        </form>
    </div>
    <?php
    // JS code to show errors
    if (isset($result["field_error"])) { ?>
        <script>
            let field_error = <?php echo json_encode($result["field_error"]); ?>;
            let el = null;
            let msg_el = null;
            for (let i in field_error) {
                el = document.querySelector(`input[name="${i}"]`);
                el.classList.add("error");
                msg_el = document.querySelector(`label[for="${el.getAttribute("id")}"] span`);
                msg_el.innerText = field_error[i];
            }
        </script>
    <?php } ?>
</body>

</html>