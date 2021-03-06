<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap and Font Awesome css-->
  <!-- we use cdn but you can also include local files located in css directory-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700%7COpen+Sans:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.lightblue.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="favicon.png">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<style>
p.pad-below {
    padding-bottom: 3cm;
}

h1 {
  font-weight: bold;
}

ul.nodot{
  list-style-type: none;
}

</style>

</head>
<body data-spy="scroll" data-target="#navigation" data-offset="120">
  <!-- intro-->
  <section id="intro" class="intro image-background">
    <div class="overlay"></div>
    <div class="content">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-12">
            <h1>We are<br /><span class="bold">Knights In Furry Armor</span></h1>
            <p class="roboto"><strong>Find Your Friend Today</strong></p>
          </div>
        </div>
      </div>
    </div><a href="#about" class="icon faa-float animated scroll-to"><i class="fa fa-angle-double-down"></i></a>
  </section>
  <!-- navbar-->
  <header class="header">
    <div class="sticky-wrapper">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to"><img src="img/logo.png" alt=""></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="plots.php">Plots</a></li>
              <li><a href="form.php">Form</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
<body>
  <div class="container">
    <div class="row" id="plots">
      <div class="col-md-6">
      <div id="myfirstchart" style="height: 250px;"></div>
    </div>
    <div class="col-md-6">
      <div id="donut-example" style="height: 250px;"></div>
    </div>
    </div>
  </div>
</body>
<br>
<br>
<br>
<br>
  <footer>
    <div class="container">
      <div id="contact" class="row">
        <div class="col-md-8">
          <h1> Contact info/footer</h1>
          <p class="roboto">&copy;2016 Knights in Furry Armour</p>
          <p> Email: knights.in.fury.armour@gmail.ca</p>
          <p> Phone Number: (XXX)-XXX-XXXX</p>
        </div>
        <div class="col-md-9">
          <p class="credit roboto"><a href="http://bootstrapious.com/portfolio-themes">Bootstrapious - Portfolio Themes</a></p>
          <!-- Please do not remove the backlink to us. It is part of the licence conditions. Thanks for understanding :)-->
        </div>
      </div>
    </div>
  </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
    <script>
    new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ]
});
    </script>

</html>
