/*on change*/
function selection() {
  var x = document.getElementById("membership").value;
  document.getElementById("selection").innerHTML =
    "You selected " + x + " Membership";
}

/*On input()*/
function toCaps() {
  var x = document.getElementById("fullName");
  x.value = x.value.toUpperCase();
}

/*On paste()*/
function paste() {
  document.getElementById("cardNumber").style.outlineColor = "red";
  document
    .getElementById("cardNumber")
    .setAttribute("placeholder", "Sorry no pasting card number");
}

/*On click()*/
function acceptTerms() {
  document.getElementById("accepted").innerHTML =
    "YOU ACCEPTED TERMS AND CONDITIONS";
}

/*on invalid*/
function cardLength() {
  alert("Card number must have 16 numbers");
}

//INVOICE
/*Oncopy()*/
function copy() {
  alert("You copied your invoice number");
}

/*beforePrint()*/
function print() {
  document.getElementsByTagName("BODY")[0].onbeforeprint = alert(
    "You are about to print your Invoice"
  );
}
