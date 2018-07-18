<?php
/*Template Name: Project page - Web Recorder
Template Post Type: post, page
*/
get_header();
?>
<?php
$first_stage_check = get('checkboxes_first_stage');
$second_stage_check = get('checkboxes_second_stage');
$prototype_check = get('checkboxes_prototype');
$result_check = get('checkboxes_result');
$previous_check = get('checkboxes_previous');
$next_check = get('checkboxes_next');
?>
<body>
<section class="project-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2><?php echo get('project_title'); ?></h2>
        <h3><?php echo get('project_client_name'); ?></h3>
      </div>
      <div class="col-sm-2 project-services">
        <?php echo get('project_services'); ?>
      </div>
    </div>
  </div>
</section>
<section id="the-challenge">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <h1 style="text-align:center;">The Challenge</h1>
      </div>
      <div class="col-sm-10">
        <?php echo get('project_the_challenge'); ?>
      </div>
    </div>
  </div>
</section>
<section id="first-stage">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-sm-3 first-stage-text">
        <?php echo get('project_first_stage_description'); ?>
      </div>
      <div class="col-sm-8 first-stage-image">
        <img class="" src="<?php echo get('project_first_stage_image'); ?>"/>
      </div>
    </div>
  </div>
</section>
<section id="second-stage">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-12 order-md-1 order-sm-2 col-md-6">
        <iframe width="395" height="650" src="https://xd.adobe.com/embed/a64fd23c-9cab-4d8f-7863-f5ed8d15f384-d07e/" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-sm-12 order-sm-1 order-md-2 col-md-4 second-stage-text">
        <?php echo get('project_second_stage_description'); ?>
      </div>
    </div>
  </div>
</section>
<section id="prototype">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-sm-12 first-stage-text">
        <?php echo get('project_prototype_description'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 first-stage-image embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="1280" height="720" src="https://xd.adobe.com/embed/9bebf80f-da94-47e3-4851-6ca11ae619b9-edda/" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section id="the-result">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-8 second-stage-text">
        <?php echo get('project_result_description'); ?>
      </div>
    </div>
  </div>
</section>
<section id="navigate-projects" class="container">
  <div class="row justify-content-between">
    <div class="col-sm-4" style="text-align:left;">
      <a href="/live-events-page"><i class="fas fa-arrow-left"></i> Previous Project</a>
      <?php echo get('project_previous'); ?>
    </div>
    <div class="col-sm-4" style="text-align:right;">
      <a href="/kzoinnovations-com">Next Project <i class="fas fa-arrow-right"></i></a>
      <?php echo get('project_next'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
