
<div class="container">
  <header class="content-header">
    <div class="meta mb-3">
      <span class="date"><?php the_date(); ?></span>
      <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>
      <span class="comment"
      ><a href="#comments"
      ><i class="fa fa-comment"></i> <?php comments_number(); ?></a
      ></span
      >
    </div>
  </header>
  
  <div class="content-body">
    <figure class="blog-banner">
      <a href="#"
      ><img class="img-fluid" src="images/blog-post-banner.jpg" alt="image"
      /></a>
      <figcaption class="mt-2 text-center image-caption">
        Image Credit: <a href="#" target="_blank">URL Here</a>
      </figcaption>
    </figure>

    <?php the_content(); ?>
  </div>

  <nav class="blog-nav nav nav-justified my-5">
    <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html"
      >Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i
    ></a>
    <a class="nav-link-next nav-item nav-link rounded-right" href="page.html"
      >Next<i class="arrow-next fas fa-long-arrow-alt-right"></i
    ></a>
  </nav>
  <hr />
</div>
