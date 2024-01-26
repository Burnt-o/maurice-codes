<html lang="en">

<head>
  <?php
  $title = "Maurice Codes";
  $description = "Hi, I’m Maurice. I'm known online as Burnt. 
        For the last decade I’ve been developing solid foundational software engineering skills 
        via open-source projects with a focus on C++, C#, reverse engineering, desktop application development 
        and whole-project architecture, collaborating with highly active user communities to create user-friendly GUI’s, 
        to manage and investigate issues, and to deliver exciting features and functionality.";
  ?>

  <meta charset="UTF-8">
  <title>
    <?php echo $title ?>
  </title>
  <meta name="description" content=<?php echo $description ?> />
  <link rel="icon" type="image/ico" href="assets/images/icon/icon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" type="image/ico" href="assets/images/icon.ico" />
  <meta name="apple-mobile-web-app-title" content=<?php echo $title ?> />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#f6d4b1" />
  <meta property="og:title" content=<?php echo $title ?> />
  <meta property="og:type" content="website" />
  <!-- <meta property="og:url" content="" />
    <meta property="og:image" content="" /> -->
  <meta name="og:description" content=<?php echo $description ?> />
  <link rel="manifest" href="webManifest.json" />

  <?php $keywords = "maurice, burnt, burntkurisu, programmer, portfolio, project, cpp, adelaide," ?>
  <meta name="keywords" content="<?php echo $keywords; ?>">
  
  <!--TODO: setup SASS so everything gets compiled into one css file-->
  <link rel="stylesheet" href="css/colorPalette.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/stickyHeader.css" type="text/css">
  <link rel="stylesheet" href="css/projectInfo.css" type="text/css">
</head>

<body>


  <?php
  require_once 'vendor/autoload.php'; // load composer dependencies
  $parser = new \cebe\markdown\Markdown(); // global markdown parser https://github.com/cebe/markdown
  

  
  // display content
  require 'stickyHeader.html';
  require 'main.php';

  ?>
    <div id='log'>Log: </div>
  <script src="js/intersectionObserver.js"></script>

</body>
<footer>
  Contact me on dsdddah: <a href="blah@bzzzzzzzzdh.com">@2463334zah</a>
</footer>

</html>