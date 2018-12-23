<?php
// Array with names
$a[] = "Asha";
$a[] = "Bala Murli";
$a[] = "Chandana";
$a[] = "Denver";
$a[] = "Bhupesh";
$a[] = "Faisal";
$a[] = "Manish";
$a[] = "Hemshanker";
$a[] = "Karthik";
$a[] = "Shiva";
$a[] = "Mahesh";
$a[] = "Anu";
$a[] = "Dilip";
$a[] = "Ranjith";
$a[] = "Shreya";
$a[] = "Aarushi";
$a[] = "Nalina";
$a[] = "Anusha";
$a[] = "Akash";
$a[] = "Rohan";
$a[] = "Saurabh";
$a[] = "Manjunath";
$a[] = "Pruthvi";
$a[] = "Yogi";
$a[] = "Yeshu";
$a[] = "Raushan";
$a[] = "Jani";
$a[] = "Kavya";
$a[] = "Negi";
$a[] = "Pavithra";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "<li> $name</li>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>