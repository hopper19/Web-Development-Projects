// var filenames = ["106020.jpg", "116010.jpg", "120010.jpg"];
// var titles = [
//   "Girl with a Pearl Earring",
//   "Artist Holding a Thistle",
//   "Portrait of Eleanor of Toledo",
// ];
// var quantities = [3, 1, 2];
// var prices = [80, 125, 75];

var filenames = [
  "106020.jpg",
  "116010.jpg",
  "120010.jpg",
  "116010.jpg",
  "120010.jpg",
];
var titles = [
  "Girl with a Pearl Earring",
  "Artist Holding a Thistle",
  "Portrait of Eleanor of Toledo",
  "Artist Holding a Thistle",
  "Portrait of Eleanor of Toledo",
];
var quantities = [3, 1, 2, 1, 2];
var prices = [80, 125, 75, 125, 75];

var subtotal = 0;
var taxPercentage = 10;
var tax = 0;
var rawShippingCost = 40;
var shippingThreshold = 1000;
var shippingCost = 0;
var grandTotal = 0;

/* 
   NOTE: parallel arrays are not an ideal way to represent this data.
         We have done this to simplify this exercise.
         
         A better approach would be to turn these parallel arrays
         into an array of cart item objects. Objects are used in
         projects 2 and 3.
*/
