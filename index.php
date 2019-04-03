<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php
$dsn = "pgsql:"
    . "host=ec2-54-228-243-238.eu-west-1.compute.amazonaws.com;"
    . "dbname=d2ph88enfggjhe;"
    . "user=diadldlkicwrrr;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=629b14b92503e6c97b3b8474057f9279c63381222333b848ca2cc51cb56ead52";

$db = new PDO($dsn);
?>
<html>
<head>
  <title>New E-Factor</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- below is the inialisation code for my firebases project. Plase to not change -->
  <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
  <!-- The code below starts the sing-in widget from friebase web.  -->
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">E-Factor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-link" href="">Home</a>
      </li>
      <li>
        <a class="nav-link" href="about.php">About</a>
      </li>
      <!-- <li>
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li> -->
    </ul>
      </div>
</nav>

<p style="color:green;">Hello welcome two e-factor<p>

<table>
   <thead>
    <tr>
     <th>Student ID</th>
     <th>Last Name</th>
     <th>First Name</th>
     <th>Dream Job</th>
    </tr>
   </thead>
   <tbody>
<?php
$query = "SELECT employee_id, last_name, first_name, title "
     . "FROM employees ORDER BY last_name ASC, first_name ASC";
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["employee_id"] . "</td>";
    echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>
   </tbody>
  </table>

  <br>

<img src="Your+e+factor+qualtrics+banner.png" alt="banner E-factor" class="cenBanner">
<div class="containerWork">
  <h2 align="center" style="color: teal;">Welcome to E-factor 2.0</h2>
  <p>The E-Factor self-assessment tool is designed to get you thinking about <span style="color: teal"> <b>your
        employability </b></span> and see how you measure up to employers' expectations.</p>
  <p><B>It will only take a few minutes.</B></p>
  <p>Make sure you enter your email address to receive a<span style="color: teal"><b> personalised report </b></span>
    and advice
    on how you can boost your E-Factor.</p>
  <br>
  <p>The E-Factor tool is just a start. We strongly encourage you to explore further by logging into Victoria
    University CareerHub, visiting our office, or booking an appointment to talk to a careers consultant. You can find
    more information on the Careers and Employment website.
  </p>
  <div id="firebaseui-auth-container"></div>
  <p>Hello from Amelia,Felix, Louise, Molly and Smeet</p>
  <h1 align="center" style="color: white;">hello</h1>
  <div id="firebaseui-auth-container"></div>
</div>

<script src="./newjs.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>