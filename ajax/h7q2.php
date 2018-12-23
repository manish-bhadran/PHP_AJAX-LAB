<html>
<body>

<h1>AJAX XMLHttpRequest USING POST METHOD</h1>

<button type="button" onclick="display()">CLICK HERE TO DISPLAY </button>

<p id="demo"></p>
 
<script>
function display() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "ans22.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Manish&lname=Bhadran");
}
</script>

</body>
</html>
