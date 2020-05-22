<?php /* Template Name: Artists */
get_header()
?>


<?php
  $conn = mysqli_connect("localhost", "sancarar_DatabaseUser", "dZ^[J-rPfIgq", "sancarar_users");
  $results = mysqli_query($conn, "SELECT * FROM users");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>


<div class="Artist-Heading">
  <h1>THE SANCARA FAMILY</h1>
</div>


<div class="Artist-Profile-Container">
  <div class="Artist-Template">
    <div class="container">
      <div class="row">
        <?php foreach ($users as $user): ?>
          <div
            style="background:url(<?php echo '/wp-content/themes/blankslate/templates/uploads/' . $user['profile_image'] ?>);background-position: center; background-size:cover; background-repeat: no-repeat;"class="Artist-Template-Image col-lg-6 col-md-12 col-sm-12">
          </div>
          <div class="Artist-Template-Bio col-lg-6 col-md-12 col-sm-12">
            <h4>  <?php echo $user['ArtistName']; ?></h1>
              <p>
                <?php echo $user['bio']; ?>
              </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



<div class="Alread-Artist">

  <p>
    ALREADY AN ARTIST?
  </p>

  <div class="button-container">
    <a href="http://sancararecord.co.uk/index.php/artistregister/" class="artist-button btn btn-success">Create Profile</a>
  </div>

</div>




<?php get_footer() ?>
