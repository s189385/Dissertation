
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
