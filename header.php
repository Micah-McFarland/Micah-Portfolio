<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css' ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Satisfy|Yellowtail" rel="stylesheet">

  <link rel="icon" href="https://micah-mcfarland.com/wp-content/uploads/2018/07/favicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="https://micah-mcfarland.com/wp-content/uploads/2018/07/favicon.png" type="image/x-icon" />
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-light">
    <a class="navbar-brand" href="/">Micah McFarland<span style="font-weight:200;"> | UI/UX Designer</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://micah-mcfarland.com/#my-work">My Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://micah-mcfarland.com/wp-content/uploads/2018/07/Micah-McFarland-Resume.pdf" target="_blank">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="cursor:pointer;" data-toggle="modal" data-target="#modalContact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
