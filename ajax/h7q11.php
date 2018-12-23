<!DOCTYPE html>
<html>
<head><title>Q11</title></head>

<body>
<h4>PHP program that prints the XML fourth guest in the list by accessing it directly instead of using  the tree structure</h4>
<?php
$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
echo $xml->book[3]->title . "<br>";
echo $xml->book[3]->author;
?> 

</body>
</html>