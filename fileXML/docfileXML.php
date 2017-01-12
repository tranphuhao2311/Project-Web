<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('SANPHAM');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
	  $ma=$x->item($i)->getElementsByTagName('MASP');
	  $loai=$x->item($i)->getElementsByTagName('MALOAISP');
	$y=$x->item($i)->getElementsByTagName('TENSP');
	$z=$x->item($i)->getElementsByTagName('GIA');
	$t=$x->item($i)->getElementsByTagName('HINHDAIDIEN');
	if ($y->item(0)->nodeType==1) {
	  //find a link matching the search text
	  if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
		
		  $hint=$hint . "<a href='chi_tiet.php?msp=".$ma->item(0)->childNodes->item(0)->nodeValue."&lsp=".$loai->item(0)->childNodes->item(0)->nodeValue."'><div style='overflow: hidden;'><li style='border-bottom: 1px dotted #bdb7b7; width: 480px; background-color: #fff;list-style: none;'>" . 
		  '<img src="img/HinhSP/'.
		  $t->item(0)->childNodes->item(0)->nodeValue.
		 '" alt="abc" style="width: 50px;padding: 10px 10px 10px 10px;"><span style="display: inline-block;">'.
		 $y->item(0)->childNodes->item(0)->nodeValue .
		 "</br>".
		  $z->item(0)->childNodes->item(0)->nodeValue . "þ</span></li></div></a>";
		}
	}
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>