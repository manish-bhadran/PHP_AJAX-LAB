<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<input type="submit" onclick="validate()" name="Submit">
</body>
</html>
<script>
    var req=new Array(3);
var url=new Array(3);
url[0]="http://www.google.com";
url[1]="http://www.3.com";
url[2]="http://www.1.com";

function validate() {
    for(var i=0; i<3; i++) {
        req[i] = new XMLHttpRequest();
        req[i].onreadystatechange = function(index) {
                  return function() {
                        if(req[index].readyState == 4 && req[index].status == 200) {
                        URL = url[index];
                        success();
                       }
            };
        }(i);
        req[i].open("GET", url[i], true);
        req[i].send(null);    
    }

}
</script>
