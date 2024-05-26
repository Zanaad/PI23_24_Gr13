<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Romancë</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
</head>

<body>
  <?php
  include 'header.php'
  ?>

  <div class="book-cards">
    <?php
    include 'db_connect.php';
    $query = "SELECT * FROM books where genre='Romance'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="book-card">
          <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
          <div class="content">
            <h5><?php echo $row['title']; ?></h5>
            <h6><?php echo $row['author']; ?></h6>
            <h5 class="price"><?php echo $row['price']; ?>€</h5>
            <div class="btn">
              <button>Shto në shportë</button>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      echo "No books found";
    }
    ?>
  </div>


  <?php
  include 'footer.php'
  ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>