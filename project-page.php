<?php
/*Template Name: Project page - Live Events Page
Template Post Type: post, page
*/
get_header();
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
    <div class="row justify-content-between align-items-center">
      <div class="col-sm-8 first-stage-image">
        <img class="" src="<?php echo get('project_second_stage_image'); ?>"/>
      </div>
      <div class="col-sm-3 second-stage-text">
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
        <iframe class="embed-responsive-item" src="https://xd.adobe.com/embed/868e95b7-fcb5-4c7c-4763-36fefffb4eac-f0bf/" width="1280" height="auto" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
    </div>
  </div>
</section>
<section id="the-result">
  <div class="container">
    <div class="row justify-content-between align-items-end">
      <div class="col-sm-8 first-stage-image">
        <img class="" src="<?php echo get('project_result_image'); ?>"/>
      </div>
      <div class="col-sm-3 second-stage-text">
        <?php echo get('project_result_description'); ?>
      </div>
    </div>
  </div>
</section>
<section id="navigate-projects" class="container">
  <div class="row justify-content-between">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:right;">
      <a href="#">Next Project <i class="fas fa-arrow-right"></i></a>
      <?php echo get('project_next'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
