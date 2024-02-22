<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
  <h1>University Library Management System</h1>
  <title>Home Page</title>
  <!--source: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar-->
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


  <p>Welcome to our university library website LMS</p>
  <!-- Source of image: https://pixabay.com/photos/library-books-bookcases-bookshelves-488690/-->
  <img src="Images\library.jpg" alt="library books">

</body>

<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>


</html>