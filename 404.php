<?php get_header(); ?>

<style>
<?php include 'CSS/header_style.css'; ?>
</style>

<div class="container-404">
<h2 class="page-heading" id="not-found-heading">Oops! Beep Boop Error 404 Page Not Found</h2>
<img src="<?php echo get_template_directory_uri(); ?>/IMG/alien-monster.png" alt="Alien Monster" id="not-found-alien" style="max-width:300px;">
<h3>Sorry bud, I think you're lost. Try out the following links:</h3>

<ul>
<li><a href="<?php echo site_url('/about');?>">About</a></li>
<li><a href="<?php echo site_url('/diary');?>">Diary</a></li>
<li><a href="<?php echo site_url('/work');?>">Work</a></li>
<li><a href="<?php echo site_url('/contact');?>">Contact</a></li>
</ul>
</div>

<?php get_footer(); ?>


