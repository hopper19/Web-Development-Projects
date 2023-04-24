function editFunction() {
  document.querySelector('.personal-details').style.display = 'none';
  document.querySelector('.edit-form').style.display = 'block';

  // Populate the form fields with the current data
  document.getElementById("address-input").value = document.getElementById("address").textContent;
  document.getElementById("city-input").value = document.getElementById("city").textContent;
  document.getElementById("region-input").value = document.getElementById("region").textContent;
  document.getElementById("country-input").value = document.getElementById("country").textContent;
  document.getElementById("postal-input").value = document.getElementById("postal").textContent;
}

function submitFunction() {
  // Get the form data
  var address = document.getElementById("address-input").value;
  var city = document.getElementById("city-input").value;
  var region = document.getElementById("region-input").value;
  var country = document.getElementById("country-input").value;
  var postal = document.getElementById("postal-input").value;

  // Update the displayed data
  document.getElementById("address").textContent = address;
  document.getElementById("city").textContent = city;
  document.getElementById("region").textContent = region;
  document.getElementById("country").textContent = country;
  document.getElementById("postal").textContent = postal;

  // Hide the edit form and show the personal details
  document.querySelector('.edit-form').style.display = 'none';
  document.querySelector('.personal-details').style.display = 'block';
}

function cancelFunction() {
  // Hide the edit form and show the personal details
  document.querySelector('.edit-form').style.display = 'none';
  document.querySelector('.personal-details').style.display = 'block';
}
