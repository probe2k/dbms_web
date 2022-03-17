<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://kit.fontawesome.com/e90d22fc03.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/profile.css" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <div class="container">
      <!-- Navigation -->
      <div class="navbar">

        <div class="logo">
          <img class="logo-img" src="../images/logo.png" alt="">
        </div>
        <!-- <div class-"logo">
              <img src="images" width=""-->
        <nav>
          <ul>
            <li><a href="../html/new_arr.php">New Arrivals</a></li>
            <li><a href="../html/men.php">Men</a></li>
            <li><a href="../html/women.php">Women</a></li>
            <li><a href="../html/browsecollection.php">Browse Collections</a></li>
            <li><a href="../html/profile.php"><i class="far fa-user"></i></a>
            <li>
            <li><a href="../html/fav.php"><i class="far fa-heart"></i></a>
            <li>
            <li><a href="../html/cart.php"><i class="fas fa-shopping-cart"></i></a>
            <li>

          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="c1">
    <div class="tab">
      <div class="xyz">
        <button class="tablinks" onmouseover="openCity(event, 'Orders')">Orders</button>
        <button class="tablinks" onmouseover="openCity(event, 'Address')">Address</button>
        <button class="tablinks" onmouseover="openCity(event, 'Logout')">Logout</button>
      </div>
    </div>

    <div id="Orders" class="tabcontent">
      <h3>Orders</h3>
      <br>
      <?php
        $res = $conn -> query("SELECT * FROM product p, orders o WHERE p.pid = o.pid");
        if (mysqli_num_rows($res) > 0) {
          while($row = $res -> fetch_array(MYSQLI_NUM)) {
            echo "
            <style>
            .row{
              display: flex;
                justify-content: space-between;
              
              gap:1.5rem;
              border:.1rem solid rgba(0,0,0,.1);
              border-radius: .5rem;
              background:#f9f9f9;
              padding:1rem 2rem;
              align-items: center;
              margin:1.0rem 0;
              
            }
            
            .col1{
                 display: flex;
                    flex-direction: column;
                    justify-content: center;
                    width:15%;
                }
            .abc{
                padding: 5px;px 50px;
                
            }
            .col2{
                list-style: none;
                font-family: 'Nunito', sans-serif
            }
            .pqr{
                display: flex;
                justify-content: space-between;
                width:90%;
               
            }
            </style>
            <div class=\"abc\">
            <div class=\"row\">
            <div class=\"col1\">
              <img src=$row[4] class=\"featured-image-1\" alt=\"\">
            </div>
            <div class=\"pqr\">
              <div class=\"col2\">
                <li>
                  <h2>$row[1]</h2>
                </li>
                <li>Price: $ $row[2]</li>
              </div>
            </div>
            </div>
          </div>
            ";
          }
        } else {
          echo "<center><h2>No Orders Yet</h2></center>";
        }
      ?>
    </div>

    <div id="Address" class="tabcontent">
      <h3>Addresses</h3>
      <br>
      <?php
        $result = $conn -> query("SELECT * FROM `cart` WHERE `address` IS NOT NULL");
        if (mysqli_num_rows($result) > 0) {
          while ($row = $result -> fetch_array(MYSQLI_NUM)) {
            echo "
              <style>
              .main {
                justify-content: center;
                width: 40%;
                padding: 5px 50px;
                box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
                margin-bottom: 20px;
              }
              .main i {
                color: #666666;
              }
              .topic {
                text-transform: capitalize;

              }
              </style>
              <div class='main'>
              <i class='fas fa-map-marker-alt'></i>
              <div class='topic'>$row[2]</div>
              </div>
            ";
          }
        }
      ?>
    </div>

    <div id="Logout" class="tabcontent">
      <center><img src="../images/logout.jpg" height='500'></center>
      <form method='post'>
        <center><button class='logout_btn' name='logout' type='submit'>Logout</button></center>
      </form>
      <?php
        if (isset($_POST['logout'])) {
          echo "<script>location.href = 'http://localhost/dbms/html/index.php'</script>";
          $conn -> close();
        }
      ?>
    </div>
  </div>
  <script src="../js/profile.js"></script>
</body>

</html>
