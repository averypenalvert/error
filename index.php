<html>

  <head>
    <link rel="shortcut icon" href="favicon.ico">
    <title>Avery Penalvert</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Icons from Font Awesome (free license) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Nunito+Sans|Quicksand|Sanchez|Scope+One|Space+Mono" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.css">
  </head>

  <body>

    <h1 id="name" class="animated fadeInLeft">
      <script>
        var currentDate = new Date();
        var greetingDay = currentDate.getDay();

        if(greetingDay == 0) {
          document.write("Monday");
        } else if(greetingDay == 1) {
          document.write("Tuesday");
        } else if(greetingDay == 2) {
          document.write("Wednesday");
        } else if(greetingDay == 3) {
          document.write("Thursday");
        } else if(greetingDay == 4) {
          document.write("Friday");
        } else if(greetingDay == 5) {
          document.write("Saturday");
        } else if(greetingDay == 6) {
          document.write("Sunday");
        } else {
          document.write("No day available");
        }
      </script>

    <!--
      <script>

        var d = new Date();
        var currentDay = d.getDate();
        var currentYear = d.getFullYear();
        var currentMonth = d.getMonth();

        document.write(currentMonth+1 + "-" + currentDay + "-" + currentYear);

      </script>
    -->
    </h1>

    <div class="navi animated fadeInDown" id="navigation">

      <!-- Main Navigation Links -->

      <ul class="nav-list">
        <li><a href="#home" class="navi-link">HOME</a/></li>
        <li><a href="#about" class="navi-link">ABOUT</a></li>
        <li><a href="#projects" class="navi-link">PROJECTS</a></li>
        <li><a href="#contact" class="navi-link">CONTACT</a></li>
      </ul>

      <!-- Social Links -->

      <ul id="socialList">
        <li><a href="#" class="icon-links animated pulse"><i class="fab fa-snapchat"></i></a></li>
        <li><a href="#" class="icon-links animated pulse"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="icon-links animated pulse"><i class="fab fa-github"></i></a></li>
        <li><a href="#" class="icon-links animated pulse"><i class="fab fa-soundcloud"></i></a></li>
      </ul>
    </div>

    <!-- Header Section -->

    <div id="home" class="header-content">
      <h1 id="welcome" class="animated fadeInDown">
        <script>

        var today = new Date();
        var hoursNow = today.getHours();
        var greeting;

        if (hoursNow >= 18) {
          greeting = 'Good Evening';
        } else if (hoursNow >= 12) {
          greeting = 'Good Afternoon';
        } else if (hoursNow >= 0) {
          greeting = 'Good Morning';
        } else {
          greeting = 'Welcome';
        }

        document.write(greeting);

      </script>

      <script>

        var specialDate =

      </script>
    </h1>
      <p class="align-middle" id="welcomeText">
        This is my personal site containing some information about me and my work. Below you will find more details about
        who I am and a few example projects showcasing my skills.
      </p>
    </div>

    <!-- About Section -->

    <div class="about" id="about" data-spy="scroll" data-target="#navigation" data-offset="0">
      <h1 id="aboutHeader">About Avery</h1>
      <p id="aboutText">My name is Avery Penalvert, and I'm an aspiring software engineer. I've been working on frontend programming for a long time and I am currently learning C++.</p>
    </div>

    <!-- Projects Section -->

    <div class="projects" id="projects">
      <h1>My Projects</h1>

    </div>

    <div class="contact-text">
      <h1>Contact Me</h1>
    </div>

    <div class="contact" id="contact">
      <div class="contact-left">
        <h4 id="contactText">Tell me who you are and I'll be in touch soon...</h4>

      </div>
      <div class="contact-right">

        <?php

        $firstName = $lastName = $email = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $firstName = test_input($_POST["firstName"]);
          $lastName = test_input($_POST["lastName"]);
          $email = test_input($_POST["email"]);
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

         ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group contact-form">
            <input type="name" id="firstName" name="name" placeholder="First Name">
            <input type="name" id="lastName" name="name" placeholder="Last Name">
            <input type="email" id="email" name="email" placeholder="Email">
            <button class="submit-btn">Submit<button>
          </div>
        </form>
      </div>
    </div>

    <div class="foot">
      <ul class="foot-list">
        <li>
          <a href="#" class="foot-link">PRIVACY POLICY &nbsp;| </a>
        </li>
        <li>
          <a href="#" class="foot-link">TERMS&nbsp;| </a>
        </li>
        <li>
          <a href="#" class="foot-link">POWERED BY BOOTSTRAP&nbsp;| </a>
        </li>
        <li>
          <a href="#" class="foot-link">DESIGNED BY ME</a>
        </li>
      </ul>
      <p style="text-align: center; font-size: 9pt; font-family: 'Quicksand';"><i class="fas fa-copyright"></i> Avery Penalvert</p>
    </div>

    <script>

      document.getElementById('firstName').

    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

</html>
