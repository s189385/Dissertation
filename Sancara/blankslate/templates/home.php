<?php /* Template Name: Homepage */
get_header()
?>


<div class="Home-Hero">
  <div class="container-fluid">
      <div class="row">
        <div class="Home-Hero-Title col-lg-7 col-sm-12 col-md-12">
          <h1>WELCOME TO SANCARA</h1>
        </div>
        <div class="Home-Hero-Text col-lg-5 col-sm-12 col-md-12">
          <p>Sancara proudly represents a talented stream of artists and creatives, who are set to make waves in their respected industries.</p>
      </div>
    </div>
  </div>
</div>


<div class="Featured-Artists">
  <h2 style="text-align:center; margin:5px 0 5px 0;">FEATURED ARTISTS</h2>
  <div class="container-fluid">
    <div class="row">
      <div style="background:url(<?php the_field('artist1image')?>); background-size:cover;background-repeat: no-repeat;" class="Artist-Container col-lg-3 col-md-6 col-sm-12">
        <p class="ArtistName"> <?php the_field('artist1name')?></p>
      </div>
      <div style="background:url(<?php the_field('artist2image')?>); background-size:cover;background-repeat: no-repeat;" class="Artist-Container col-lg-3 col-md-6 col-sm-12">
              <p class="ArtistName"><?php the_field('artist2name')?></p>
      </div>
      <div style="background:url(<?php the_field('artist3image')?>); background-size:cover;background-repeat: no-repeat;" class="Artist-Container col-lg-3 col-md-6 col-sm-12">
              <p class="ArtistName"><?php the_field('artist3name')?></p>
      </div>
      <div style="background:url(<?php the_field('artist4image')?>); background-size:cover;background-repeat: no-repeat;" class="Artist-Container col-lg-3 col-md-6 col-sm-12">
              <p class="ArtistName"> <?php the_field('artist4name')?></p>
      </div>
    </div>
  </div>
</div>

<div class="Why-Sancara">
  <div class="container-fluid">
    <div class="row">
      <div class="Why-Title col-lg-6 col-md-6 col-sm-12">
        <h3>WHY SANCARA?</h3>
      </div>
      <div class="Why-Text col-lg-6 col-md-6 col-sm-12s">
        <p>Founded by Joseph Munyeza, Moses Alexander and Hanson Bangala, Sancara is more than a record label or a group collective. Sancara proudly represents a talented stream of artists and creatives, who are set to make waves in their respected industries and develop their successful careers. From the very outset, they have always looked to help in any way they can to champion music they feel passionate about.</p>
      </div>
    </div>
  </div>
</div>



<?php get_footer() ?>
