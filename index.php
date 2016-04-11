<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<body>

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="post">
        <?php the_title(); ?>

        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

  <?php else : ?>

    <p>There are no posts to show.</p>

  <?php endif; ?>
  
</body>
</html>