<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CRM Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
    integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>


<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer 
            mdl-layout--fixed-header">

    <?php
    include "header.inc.php";

    ?>

    <?php
    include "left.inc.php";

    ?>

    <main class="mdl-layout__content mdl-color--grey-50">

      <section class="page-content">

        <div class="mdl-grid">


          <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
            <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
              <h2 class="mdl-card__title-text">My Orders</h2>
            </div>
            <div class="mdl-card__supporting-text">
              <ul class="mdl-list">
                <?php
                for ($i = 500; $i < 550; $i = $i + 10) {
                  echo " <li ><a href='#'>Order #";
                  echo $i;
                  echo "</a></li>";

                }
                ?>
              </ul>

            </div>
          </div>


          <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">
            <div class="mdl-card__title mdl-color--orange">
              <h2 class="mdl-card__title-text">Selected Order: #520</h2>
            </div>
            <div class="mdl-card__supporting-text">
              <table class="mdl-data-table  mdl-shadow--2dp">
                <caption>Customer: <strong>Mount Royal University</strong></caption>
                <thead>
                  <tr>
                    <th>Cover</th>
                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="totals">
                    <td colspan="4">Subtotal</td>
                    <td>$
                      <?php
                      include "data.inc.php";
                      echo ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);
                      ?>
                    </td>

                  </tr>
                  <tr class="totals">
                    <td colspan="4">Shipping</td>
                    <td>$
                      <?php
                      include "data.inc.php";
                      if ((($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4)) < 10000) {
                        echo 200;
                      } else {
                        echo 100;
                      }
                      ?>
                    </td>

                  </tr>
                  <tr class="grandtotals">
                    <td colspan="4">Grand Total</td>
                    <td>$
                      <?php
                      include "data.inc.php";
                      if ((($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4)) < 10000) {
                        echo 200 + ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);
                      } else {
                        echo 100 + ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);
                      }
                      ?>
                    </td>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  include 'data.inc.php';

                  function outputOrderRow($file, $title, $quantity, $price)
                  {
                    $quotation = '"';

                    echo "<tr> <td> <img src=";
                    echo $quotation;
                    echo "images/books/tinysquare/";
                    echo $file;
                    echo $quotation;
                    echo "/></td>";
                    echo "<td class=";
                    echo $quotation;
                    echo "mdl-data-table_cell--non-numeric>";
                    echo $quotation;
                    echo ">";
                    echo $title;
                    echo "</td> <td>";
                    echo $quantity;
                    echo "</td> <td>";
                    echo $price;
                    echo "</td> <td>";
                    echo $quantity * $price;
                    echo "</td> <td>";


                  }

                  echo outputOrderRow($file1, $title1, $quantity1, number_format($price1, 2, "."));
                  echo outputOrderRow($file2, $title2, $quantity2, $price2);
                  echo outputOrderRow($file3, $title3, $quantity3, $price3);
                  echo outputOrderRow($file4, $title4, $quantity4, $price4);

                  ?>

                </tbody>

              </table>
            </div>

          </div>

        </div>

      </section>
      <form action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
      </form>

    </main>


  </div>
  </div>
</body>

</html>