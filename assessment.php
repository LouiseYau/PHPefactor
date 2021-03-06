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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- below is the inialisation code for my firebases project. Plase to not change -->
  <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
  <!-- The code below starts the sing-in widget from friebase web.  -->
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <!-- Bootstrap NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">E-Factor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li>
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li>
          <a class="nav-link" href="assessment.php">Self Assessment</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>

  <!-- E-factor banner -->
  <img src="Your+e+factor+qualtrics+banner.png" alt="banner E-factor" class="cenBanner">
  <div class="containerWork">
    <h2 align="center" style="color: dodgerblue;">YOUR EMPLOYABILITY FACTOR
    </h2>
    <p>How do you evaluate your ability for the following skills and attributes?
      You can think about these skills and attributes in relation to your study, any work or extracurricular activities.
    </p>
    <!-- <h4 align="center" style="color: teal;">VERBAL & WRITTEN COMMUNICATION</h4> -->

<!-- form starts here -->
     <form id="regForm" action="postScore.php" method="post" >
      <!-- One "tab" for each step in the form: -->
      <h4 align="center" style="color: teal;">VERBAL & WRITTEN COMMUNICATION</h4>
      <br>
      <div class="tab">

        <p>Write in appropriate tone & style for the audience: <span id="demo1"></span></p>
        <div class="slidecontainer">
        <input type="number" name="q1" id="q1" min="0" max="10" value="0">
          <!-- <input class="slider" id="myRange1" name = "q1" type="range" min="1" max="10" value="0" > -->
        </div><br>
        <p>Speak Clearly to different audiences: <span id="demo2"></span></p>
        <div class="slidecontainer">
        <input type="number" name="q2" id="q2" min="0" max="10" value="0">
          <!-- <input class="slider" id="myRange2" name ="q2" type="range" min="1" max="10" value="0" > -->
        </div><br>
        <p>Edit my own written work: <span id="demo3"></span></p>
        <div class="slidecontainer">
        <input type="number" name="q3" id="q3" min="0" max="10" value="0">
          <!-- <input class="slider" id="myRange3" name="q3" type="range" min="1" max="10" value="0" > -->
        </div><br>
        <p>Use correct spelling, punctuation & Grammar: <span id="demo4"></span></p>
        <div class="slidecontainer">
          <div class="slidecontainer">
          <input type="number" name="q4" id="q4" min="0" max="10" value="0">
            <!-- <input class="slider" id="myRange4" name="q4" type="range" min="1" max="10" value="0" > -->
          </div>
          <br>
          <!-- <p><input placeholder="First name..." oninput="this.className = ''"></p>
        <p><input placeholder="Last name..." oninput="this.className = ''"></p> -->
        </div>

        <!-- <div class="tab">Contact Info:
          <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
          <p><input placeholder="Phone..." oninput="this.className = ''"></p>
        </div>

        <div class="tab">Birthday:
          <p><input placeholder="dd" oninput="this.className = ''"></p>
          <p><input placeholder="mm" oninput="this.className = ''"></p>
          <p><input placeholder="yyyy" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Login Info:
          <p><input placeholder="Username..." oninput="this.className = ''"></p>
          <p><input placeholder="Password..." oninput="this.className = ''"></p>
        </div> -->

        <!-- <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div> -->

        <div style="overflow:auto;">
        <div style="float:right;">
        <input type="submit" id="submit" name="submit" 
              class="primary-btn" value="Submit"></input>
          </div>
       </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <!-- <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span> -->
        </div>

    </form>

  </div>

  <!-- Javascript at the bottom of the page as of the DOM structure -->
  <script src="./newjs.js"></script>
  <script src="./javascript/form.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>