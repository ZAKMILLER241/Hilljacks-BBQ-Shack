<?php
  $_SESSION['username'] = "Admin";
?>


<?=template_header('Gallery')?>

  <section class="gallery-links">
    <div class="wrapper">
      <h2>Gallery</h2>

      <div class="gallery-container">
        <?php
        include_once 'includes/dbh.includes.php';

        $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC"
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL State Failure!";
        } else {
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while ($row <= mysqli_fetch_assoc($result)) {
            echo '<a href="#">
              <div style="background-image: url(img/gallery/uploads/'.$row["imgFullNameGallery"].');"></div>
              <h3>'.$row["titleGallery"].'</h3>
              <p>'.$row["descGallery"].'</p>
            </a>'
          }
        }
      ?>
    </div>

      <?php
      if(isset($_SESSION['username'])) {
        echo '<div class="gallery-upload">
          <form action="includes/gallery-upload.includes.php" method="post" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="File Name...">
            <input type="text" name="filetitle" placeholder="Image Title...">
            <input type="text" name="filedesc" placeholder="Image Description...">
            <input type="file" name="file">
            <button type="submit" name="submit">Upload</button>
          </form>
        </div>';
      }
      ?>

    </div>
  </section>




<?=template_footer()?>
