<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <h2>Display Student Details</h2>
    <div class="table_container">
      <table class="table">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Place</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Khanam</td>
            <td>khanam@gmail.com</td>
            <td>9876543219</td>
            <td>Bangalore</td>
            <td>
              <a href="update.php"
                ><i class="fa-solid fa-pen-to-square"></i
              ></a>
              <a href="delete.php"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Saniya</td>
            <td>Saniya@gmail.com</td>
            <td>95465743544</td>
            <td>Mumbai</td>
            <td>
              <a href="update.php"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="delete.php"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Siya</td>
            <td>siya@gmail.com</td>
            <td>9786464353</td>
            <td>Chennai</td>
            <td>
              <a href="update.php"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="delete.php"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>Vicky</td>
            <td>vicky@gmail.com</td>
            <td>9774833344</td>
            <td>Kolkata</td>
            <td>
              <a href="update.php"><i class="fa-solid fa-pen-to-square"></i></a>
              <a href="delete.php"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
        </tbody>

        <tbody></tbody>
      </table>
    </div>
    <div class="footer">
      <p>All right reserved- Made with 💖 by Khanam</p>
    </div>
  </body>
</html>
