<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Search Results</title>
</head>
<body>
            <div class="c1">
                <h2>Search Results</h2>
            </div>
            <section class="product_list">
                <div class="grid">
                    <?php
                        $search = $_POST['search'];
                        if (isset($_POST['search_sub'])) {
                            $res = $conn -> query("SELECT * FROM `product` WHERE `pname` LIKE '%$search%'");
                            if (mysqli_num_rows($res) > 0) {
                                while ($row = $res -> fetch_array(MYSQLI_NUM)) {
                                    echo "
                                    <link rel=\"stylesheet\" href=\"../css/mw.css\" />
                                    <div class='grid'>
                                    <div class='card'>
                                        <div class='image'><img src=$row[4]></div>
                                        <div class='title'>$row[1]</div>
                                        <div class='price'>$ $row[2]</div>
                                        <div class='add_to_cart'>
                                        <a href=\"./s$row[0].php\">
                                            <button class='add_to_cart_button'>
                                                <span class='add_to_cart_button_text'>
                                                    <span>Buy Now</span>
                                                    <span>🛒</span>
                                                </span>
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                    ";
                                }
                            } else {
                                echo "Query Failed";
                            }
                        }
                    ?>
                </div>
            </section>
</body>
</html>
