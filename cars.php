<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./JavaScript/main.js"></script>
  <title>My Image Gallery</title>
</head>

<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.php">My Image Gallery</a></h1>
        <ul>
          <li><a href="index.php">Movies</a></li>
          <li><a href="favourite.php">Personalities</a></li>
          <li><a class="current" href="cars.php">Cars</a></li>
        </ul>
      </div>
    </nav>

    <div id="showcase">
      <div class="container">
        <section class="left-showcase">
          <div id="deck">
            <div class="row">
              <div class="resize"><img src="./img/cars/car1.jpg" /></div>
              <div class="resize"><img src="./img/cars/car2.jpg" /></div>
              <div class="resize"><img src="./img/cars/3.jpg" /></div>
              <div class="clr"></div>
            </div>
            <div class="row">
              <div class="resize"><img src="./img/cars/7.jpg" /></div>
              <div class="resize"><img src="./img/cars/5.jpg" /></div>
              <div class="resize"><img src="./img/cars/6.jpg" /></div>
              <div class="clr"></div>
            </div>
          </div>
          <div class="clr"></div>
          <button type="button" id="button1" class="btn">Shuffle</button>
        </section>

        <section class="utilities">
          <div class="container">
            <div class="bmi">
              <form>
                <h1><span class="text-primary">BMI</span> Calculator</h1>
                <input id="weight" type="text" placeholder="Your weight in kilograms" />
                <br />
                <br />
                <input id="height1" type="text" placeholder="Your height in Feet" />
                <br>
                <br>
                <input id="height2" type="text" placeholder="Your height in Inches" />
                <br />
                <br />

                <a class="submit btn" onclick="bmi()">Submit</a>
                <p id="result">Here will be your result</p>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
  </header>

  <footer id="main-footer">
    <div class="alignment">
      <h2>Contact Me</h2>
      <ul>
        <li>Kritartha Patowary</li>
        <li>Reg No: 201800006</li>
        <li>kritarthapatowary@gmail.com</li>
      </ul>
    </div>
    <div class="clr"></div>
    <hr>
    <p class="copyright">Copyright &copy; 2020 All Rights Reserved Kritartha Patowary</p>
  </footer>
</body>

</html>