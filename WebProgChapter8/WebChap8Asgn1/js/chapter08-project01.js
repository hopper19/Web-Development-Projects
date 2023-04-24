/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */

// loop all variables in the arrays
function outputCartRows() {
  subtotal = 0;
  for (var i = 0; i < filenames.length; i++) {
    // calculate the total
    var total = calculateTotal(quantities[i], prices[i]);
    subtotal += total;
    // output the row
    outputCartRow(filenames[i], titles[i], quantities[i], prices[i], total);
  }
}

function outputSubtotal() {
  document.write("$" + subtotal.toFixed(2));
}

function outputTax() {
  tax = subtotal * (taxPercentage / 100);
  document.write("$" + tax.toFixed(2));
}

function outputShipping() {
  if (subtotal < shippingThreshold) {
    shippingCost = rawShippingCost;
  } else {
    shippingCost = 0;
  }
  document.write("$" + shippingCost.toFixed(2));
}

function outputGrandTotal() {
  grandTotal = subtotal + tax + shippingCost;
  document.write("$" + grandTotal.toFixed(2));
}
