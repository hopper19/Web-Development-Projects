// a function that is passed a quantity and price and returns their product
function calculateTotal(quantity, price) {
  return quantity * price;
}

// <tr>
//   <td><img class="img-thumbnail" src="images/116010.jpg" alt="..."></td>
//   <td>Artist Holding a Thistle</td>
//   <td>2</td>
//   <td>$500</td>
//   <td>$1000</td>
// </tr>
// Use toFixed() to format the number variables to 2 decimal places
function outputCartRow(file, title, quantity, price, total) {
  document.write("<tr>");
  document.write(
    "<td><img class='img-thumbnail zoom' src='images/" + file + "' alt='...'></td>"
  );
  document.write("<td>" + title + "</td>");
  document.write("<td>" + quantity + "</td>");
  document.write("<td>$" + price.toFixed(2) + "</td>");
  document.write("<td>$" + total.toFixed(2) + "</td>");
  document.write("</tr>");
}
