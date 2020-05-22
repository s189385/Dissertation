<?php /* Template Name: ArtistRegister */
get_header()
?>



<?php
   //$basepath =$_SERVER['DOCUMENT_ROOT'];
   //echo $basepath."/wp-content/themes/blankslate/assets/artists-profile-upload/images/";
?>


<?php
 if (isset($_POST['submit'])) { //to check if the form was submitted
 $username= $_POST['bio'];
 echo $username;
}
?>


<div class="container">
  <div class="row">
    <div class=" col-lg-6 col-md-8 col-sm-12 form-div">
      <form action="" method="post" enctype="multipart/form-data">
        <h2 class="text-center mb-3 mt-3">UPLOAD ARTIST PROFILE</h2>
        <div class="form-group text-center" style="position: relative;" >
          <span class="img-div">
            <div class="text-center img-placeholder"  onClick="triggerClick()">
            </div>
            <img class="Image-Container" src="/wp-content/themes/blankslate/assets/artists-profile-upload/images/artist.png" onClick="triggerClick()" id="profileDisplay">
          </span>
          <input type="file" name="file" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
          <label>Profile Image</label>
        </div>
        <div class="form-group">
          <label>Artist Name</label>
          <input type="text" name="ArtistName" value=""/>
        </div>
        <div class="form-group">
          <label>Bio</label>
          <input type="text" name="bio" value=""/>
        </div>
        <div class="form-group">
          <button type="submit" name="save_profile" class="artist-button btn btn-primary btn-block">CREATE ARTIST</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php

if (isset($_POST['save_profile'])) {
  $FileName = $_FILES['file']['name'];
  $FileTmpName = $_FILES['file']['tmp_name'];
  $FileSize = $_FILES['file']['size'];
  $Fileerror = $_FILES['file']['error'];
  $FileType = $_FILES['file']['type'];



  $files = scandir($Destination)[2];
  echo $files;


  $FileExt = explode('.' , $FileName);
  $FileActualExtension = strtolower(end($FileExt));

  $allowed = array('jpg','jpeg','png');

  if (in_array($FileActualExtension,$allowed)) {

    if ($Fileerror === 0) {
      if ($FileSize < 1000000) {
        $UniqueName = uniqid('' , true).".".$FileActualExtension;
        $FileDestination = './wp-content/themes/blankslate/templates/uploads/'.$UniqueName;
        move_uploaded_file($FileTmpName, $FileDestination);
        $bio = stripslashes($_POST['bio']);
        $ArtistName = stripslashes($_POST['ArtistName']);
        if (strlen($ArtistName) < 25) {
          //Sql connection and insertion
          if (strlen($bio) < 1000) {
            $conn = mysqli_connect("localhost", "sancarar_DatabaseUser", "dZ^[J-rPfIgq", "sancarar_users");
            $sql = "INSERT INTO users SET profile_image='$UniqueName',ArtistName='$ArtistName', bio='$bio'";
                    if(mysqli_query($conn, $sql)){
                      $msg = "Image uploaded and saved in the Database";
                      $msg_class = "alert-success";
                      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Your profile has been added!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>';
                    } else {
                      $msg = "There was an error in the database";
                      $msg_class = "alert-danger";
                      echo "Not connected to database";
                    }
          }else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole! Your bio cannot exceed 500 characters.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
          }
        }else {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole! Your username cannot exceed 25 characters.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';
        }
      }else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Your image is too large!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
      }
    }else {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> There was an error uploading the File.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }

  }else {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Image type not allowed.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }





}
 ?>


<script>
  function triggerClick(e) {
  document.querySelector('#profileImage').click();
  }
  function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
  }
</script>






<?php get_footer() ?>
