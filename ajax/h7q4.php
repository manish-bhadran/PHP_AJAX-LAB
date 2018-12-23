<html>
<head><title>Answer 4</title></head>
<body>
<h2>XML document FoodMenu.xml fetch the calories of French Toast and display it to the user using AJAX</h2>
<div id='showfood'></div>

<script>
displayfood(3);

function displayfood(i) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this, i);
    }
  };
  xmlhttp.open("GET", "FoodMenu.xml", true);
  xmlhttp.send();
}

function myFunction(xml, i) {
  var xmlDoc = xml.responseXML; 
  x = xmlDoc.getElementsByTagName("food");
  document.getElementById("showfood").innerHTML =
  "NAME: " +
  x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
  "<br>PRICE: " +
  x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
  "<br>DESCRIPTION: " + 
  x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue +
  "<br>CALORIES: " + 
  x[i].getElementsByTagName("calories")[0].childNodes[0].nodeValue;

}
</script>

</body>
</html>