<header>
        <?php
            $sql = "SELECT * FROM top_bar";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top_bar_text">
                <!-- <p>FREE TRACKED SHIPPING WORLDWIDE ON ORDERS OVER $100</p> -->
                <p><?php print $row["heading"]; ?></p>

                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div><br>
    </header>