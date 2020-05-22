<?php /* Template Name: About */
get_header()
?>

<div class="About-Header">
  <div class="Container-fluid">
    <div class="row">
      <div class="About-Heading">
        <h1>THE SANCARA STORY</h1>
      </div>
    </div>
  </div>
</div>

<div class="Story-Content">
  <div class="container">
    <div class="row">
      <div class="Story-Paragraph">
        <p>
          <?php the_field('thesancarastory')?>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="Founder-Profiles">
  <div class="Founders-Heading">
    <h2>OUR FOUNDERS</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="Founder-Container col-lg-6 col-md-12 col-sm-12">
        <div style="background:url(<?php the_field('founder1image')?>); background-size:cover;background-repeat: no-repeat;" class="Founder-Image">
        </div>
        <div class="Founder-Name">
          <h3><?php the_field('founder1name')?></h3>
        </div>
        <div class="Founder-Social">
          <div class="container">
            <div class="row">
              <a href="tel:<?php the_field('founder1phonenumber')?>">
                <i  class="fas fa-phone col-lg-2 col-sm-12">
                </i>
                  </a>
                  <a href="mailto:<?php the_field('founder1email')?>">
                <i class="fas fa-envelope col-lg-2 col-sm-12">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="Founder-Description">
          <p><?php the_field('founder1description')?></p>
        </div>
      </div>
      <div class="Founder-Container col-lg-6 col-md-12 col-sm-12">
        <div style="background:url(<?php the_field('founder2image')?>); background-size:cover;background-repeat: no-repeat;" class="Founder-Image">
        </div>
        <div class="Founder-Name">
          <h3><?php the_field('founder2name')?></h3>
        </div>
        <div class="Founder-Social">
          <div class="container">
            <div class="row">
              <a href="tel:<?php the_field('founder2phonenumber')?>">
                <i  class="fas fa-phone col-lg-2 col-sm-12">
                </i>
              </a>
                <a href="mailto:<?php the_field('founder2email')?>">
                <i class="fas fa-envelope col-lg-2 col-sm-12"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="Founder-Description">
          <p><?php the_field('founder2description')?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
