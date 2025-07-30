<?php include "./Includes/connect.php"; 
// var_dump($_GET); 
// echo $_GET['username']; La méthode get affiche les informatinos de l'utilsiateur dans la barre de l'ULR. Pour des informations sensibles, cette méthode est à éviter

// var_dump($_POST);
// echo $_POST['username']; La méthode POST permet de masquer les informations sensibles des utilisateurs.
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP - CRUD Operation</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form_container">
      <form action="" method="post">
        <fieldset>
          <legend>Personal Details</legend>
          <label for="username"></label>
          <span>Name <span class="required">*</span></span
          ><input
            type="text"
            placeholder="Enter your Username"
            autocomplete="off"
            name ="username"
          />

          <label for="email"></label>
          <span>Email <span class="required">*</span></span
          ><input
            type="email"
            placeholder="Enter your Email"
            autocomplete="off"
            name="email"
          />

          <label for="phone"></label>
          <span>Phone <span class="required">*</span></span
          ><input
            type="number"
            placeholder="Enter your Mobile"
            autocomplete="off"
            name="phone"
          />

          <label for="place"></label>
          <span>Place <span class="required">*</span></span
          ><input
            type="text"
            name="place"
            placeholder="Enter your Place"
            autocomplete="off"
            name="place"  
          />

          <input type="submit" class="submit_btn" name="Submit"/>

          <a href="display.php" class="view_data">Details</a>
          <a
            href="https://www.youtube.com/c/StepbyStep_KhanamCoding"
            class="view_data"
            target="_blank"
            >Channel</a
          >
        </fieldset>
      </form>
    </div>

    <div class="footer">
      <p>All right reserved- Made with 💖 by Khanam</p>
    </div>
  </body>
</html>
