<div class="shop-grid">
    <?php
    include 'db_connect.php';
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '  <div class="product-img"><i class="fas fa-box fa-5x"></i></div>';
            echo '  <div class="product-info">';
            echo '    <h3>' . $row["name"] . '</h3>';
            echo '    <p class="category">' . $row["category"] . '</p>';
            echo '    <p class="price">$' . $row["price"] . '</p>';
            echo '    <button class="btn-buy">Buy Now</button>';
            echo '  </div>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
    $conn->close();
    ?>
</div>
