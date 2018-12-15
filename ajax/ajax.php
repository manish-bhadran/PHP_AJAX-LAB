<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<P id="aaru">Manish</P>
<script>
function  loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("aaru").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "pink.txt", true);
  xhttp.send();
}
</script>

</body>
</html>
