<?php
/*Template Name: Project page
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
<section id="first-stage" <?php if($first_stage_check == false){echo 'style="display:none"';} ?>>
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
<section id="second-stage" <?php if($second_stage_check == false){echo 'style="display:none"';} ?>>
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
<section id="prototype" <?php if($prototype_check == false){echo 'style="display:none"';} ?>>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-sm-3 first-stage-text">
        <?php echo get('project_prototype_description'); ?>
      </div>
      <div <?php if(get('project_prototype_link') == null) { echo 'style="display:none;"'; } ?> class="col-sm-8 first-stage-image">
        <?php echo get('project_prototype_link'); ?>
      </div>
      <div <?php if(get('project_prototype_image') == null) { echo 'style="display:none;"'; } ?> class="col-sm-8 first-stage-image">
        <img class="" src="<?php echo get('project_prototype_image'); ?>"/>
      </div>
    </div>
  </div>
</section>
<section id="the-result" <?php if($result_check == false){echo 'style="display:none"';} ?>>
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
    <div class="col-sm-4" style="text-align:left;" <?php if($previous_check == false){echo 'style="display:none"';} ?>>
      <a href="#"><i class="fas fa-arrow-left"></i>Previous Project</a>
      <?php echo get('project_previous'); ?>
    </div>
    <div class="col-sm-4" style="text-align:right;" <?php if($next_check == false){echo 'style="display:none"';} ?>>
      <a href="#">Next Project<i class="fas fa-arrow-right"></i></a>
      <?php echo get('project_next'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
