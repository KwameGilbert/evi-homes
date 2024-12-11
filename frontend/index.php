<?php $comp = './components/'; ?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <?php include_once $comp . 'header.php'; ?>

  <!-- Hero -->
  <?php include_once $comp . 'hero.php'; ?>
 
  
  <!-- Listings -->
  <?php include_once $comp . 'listings.php'; ?>
  
  <!-- Property Map -->
  <?php include_once $comp . 'property-map.php'; ?>

  <!-- Reviews -->
  <?php include_once $comp . 'reviews.php'; ?>

  <!-- About Us -->
   <?php include_once $comp . 'about.php'; ?>

  <!-- FAQ -->
  <?php include_once $comp . 'faq.php'; ?>

  <!-- Contact Us -->
  <?php include_once $comp . 'contact-us.php'; ?>

  <!-- Chat Widget -->
  <?php include_once $comp . 'chat-widget.php'; ?>
  
  <!-- Newsletter -->
  <?php include_once $comp . 'newsletters.php'; ?>
  
  <!-- Footer -->
  <?php include_once $comp . 'footer.php'; ?>

</body>

</html>