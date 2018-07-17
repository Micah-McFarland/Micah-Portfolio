<?php
/* Template Name: Frontpage
*/
get_header();
?>

<head>
</head>

<body>
<section id="contact-card" class="blue-bg">
  <div class="container">
    <div class="row">
      <div class="contact-card">
        <div>
          <?php echo get('frontpage_contact_card_text'); ?>
          <div class="contact-icons">
            <a href="https://twitter.com/Micah_McFarland"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/micahmcfarland/"><i class="fab fa-instagram"></i></a>
            <a href="mailto:micah.mcfarland@gmail.com"><i class="far fa-envelope"></i></a>micah.mcfarland@gmail.com
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="glass-bg">
    <div class="container" style="padding: 40px;">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align:center;"><?php echo get('section_title'); ?></h1>
          <?php echo get('section_body'); ?>
        </div>
      </div>
      <div class="row" style="display: flex; align-items: center;">
          <div class="col-sm-3 icon-div justify-content-end">
            <img class="design-icon" src="<?php echo get('section_image_1'); ?>"/>
          </div>
          <div class="col-sm-3 icon-div">
            <img class="design-icon" src="<?php echo get('section_image_2'); ?>"/>
          </div>
          <div class="col-sm-3 icon-div justify-content-start">
            <img class="design-icon" src="<?php echo get('section_image_3'); ?>"/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 icon-div">
            <p style="margin-left: -6.5vw;">Interface Design</p>
          </div>
          <div class="col-sm-3 icon-div">
            <p>Web Design</p>
          </div>
          <div class="col-sm-3 icon-div">
            <p style="margin-left: -4.5vw;">Graphic Design</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="my-work" class="work-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 style="text-align:center; margin-bottom:2rem;">My Work</h1>
      </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
      <div class="col-md-12">
        <div class="project-bg-left">
          <div class="row justify-content-end" style="display: flex; align-items: center;">
            <div class="col-md-7">
              <img class="project-image" src="<?php echo get('project_image_1'); ?>"/>
            </div>
            <div class="col-md-4 project-preview">
              <h2><?php echo get('project_title_1'); ?></h2>
              <h3><i><?php echo get('project_client_1'); ?></i></h3>
              <h4><?php echo get('project_date_1'); ?></h4>
              <?php echo get('project_blurb_1'); ?>
            </div>
            <div class="project-btn" style="margin-left: 75%;">See the story</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
      <div class="col-md-12">
        <div class="project-bg-right" style="margin-right:-20%;">
          <div class="row justify-content-start" style="display: flex; align-items: center;">
            <div class="col-md-4 project-preview">
              <h2><?php echo get('project_title_2'); ?></h2>
              <h3><i><?php echo get('project_client_2'); ?></i></h3>
              <h4><?php echo get('project_date_2'); ?></h4>
              <?php echo get('project_blurb_2'); ?>
            </div>
            <div class="col-md-7">
              <img class="project-image" src="<?php echo get('project_image_2'); ?>"/>
            </div>
            <div class="project-btn" style="margin-left: 4%;">See the story</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-bottom: 50px;">
      <div class="col-md-12">
        <div class="project-bg-left">
          <div class="row justify-content-end" style="display: flex; align-items: center;">
            <div class="col-md-7">
              <img class="project-image" src="<?php echo get('project_image_3'); ?>"/>
            </div>
            <div class="col-md-4 project-preview">
              <h2><?php echo get('project_title_3'); ?></h2>
              <h3><i><?php echo get('project_client_3'); ?></i></h3>
              <h4><?php echo get('project_date_3'); ?></h4>
              <?php echo get('project_blurb_3'); ?>
            </div>
            <div class="project-btn" style="margin-left: 75%;">See the story</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="<?php echo get_template_directory_uri().'/js/jquery-3.3.1.min.js' ?>"></script>
<?php get_footer(); ?>
