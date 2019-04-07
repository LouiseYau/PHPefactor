<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php
$dsn = "pgsql:"
    . "host=ec2-54-197-232-203.compute-1.amazonaws.com;"
    . "dbname=d29chcvsqfn3rt;"
    . "user=mzczddtnpbehwl;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=df9a4cf4f89c91788a80ba46ca2906d73a2f005fe212d060202db05396d5439b";

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
        <li>
          <a class="nav-link" href="assessment.php">Self Assessment</a>
        </li>
      <!-- <li>
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li> -->
    </ul>
      </div>
</nav>

<img src="Your+e+factor+qualtrics+banner.png" alt="banner E-factor" class="cenBanner">
<div class="containerWork">
  <h2 align="center" style="color: teal;"> Your Results </h2>


<table>
   <thead>
    <tr>
     <th>User ID</th>
     <th>Q1e</th>
     <th>Q2</th>
     <th>Q3</th>
     <th>Q4</th>
     </tr>
   </thead>
   <tbody>
<?php
$query = "SELECT user_id, q1, q2,q3,q4"
     . "FROM question_scores1";
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["user_id"] . "</td>";
    echo "<td>" . htmlspecialchars($row["q1"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["q2"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["q3"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["q4"]) . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>
   </tbody>
  </table>

  <br>
  

<script src="./newjs.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>