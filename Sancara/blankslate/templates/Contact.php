<?php /* Template Name: Contact */
get_header()
?>

<div class="Contact-Title">
  <div class="container">
    <div class="row">
      <h1>GET IN TOUCH</h1>
    </div>
  </div>
</div>

<div class="Triangle-Container">
  <div class="downwards-Triangle">

  </div>
</div>


<div class="Contact-Email-Form">
  <div class="Top-Form">
    <?php echo do_shortcode( '[wpforms id="101" title="false" description="false"]' ); ?>
  </div>
</div>

<div class="Find-Us-Container">
  <h2>FIND US HERE</h2>

  <div class="container">
    <div class="row">
      <div class="Map-Container col-lg-8 col-md-12 col-sm-12">
          <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
      </div>
      <div class="Address-Container col-lg-4 col-md-12 col-sm-12">
        <h3>ADDRESS</h3>
        <p>IP2 3GH</p>
        <p>Chalon Street</p>
        <p>Hazel House</p>
      </div>
    </div>
  </div>

  <div class="Request-Callback-Container">
    <h2>REQUEST A CALLBACK</h2>
    <div class="Callback-Form">
      <?php echo do_shortcode('[wpforms id="102" title="false" description="false"]'); ?>
    </div>
  </div>

  </div>


</div>


<?php get_footer() ?>
