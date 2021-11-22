<?php
    require "session.php";
    require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
    <p>This is Home Page</p>
    <p>Hello, <?php echo $_SESSION['user'] ?></p>
    <button name="logout"><a href="logout.php">Log Out</a></button>
    <body>
        <button><a href="CreatePost.php">Create Post</a></button>
        <br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">S.N.</th>
          <th scope="col">File Name</th>
          <th scope="col">User ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <?php
    //   session_start();
      $userName = $_SESSION['user'];
      $getID = "SELECT * FROM user_details WHERE Username = '{$_SESSION['user']}'";
      $result1 = mysqli_query($conn,$getID);
      $row1 = mysqli_fetch_assoc($result1);
      $userid = $row1['id'];
      echo $userid;
      $sql = "SELECT * FROM `user_posts` WHERE user_id = $userid";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          if (count($row) == 0) {
            echo 'No Data Found';
          } else {
            $id = $row['id'];
            $name = $row['file_name'];
            $fkUserID = $row['user_id'];
            $title = $row['title'];
            $description = $row['description'];
            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $fkUserID . '</td>
            <td>' . $title . '</td>
            <td>' . $description . '</td>            
          </tr>';
          }
        }
      }
      ?>

    </table>
    </body>
</body>
</html>