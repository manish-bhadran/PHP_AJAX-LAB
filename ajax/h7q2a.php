<!DOCTYPE html>
<html>
<body>

<h1>AJAX XMLHttpRequest USWING GET METHOD</h1>

<button type="button" onclick="loadDoc()">CLICK HERE TO DISPLAY</button>

<p id="demo"></p>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ans2.php?fname=Manish&lname=Bhadran", true);
  xhttp.send();
}
</script>
 
</body>
</html>
