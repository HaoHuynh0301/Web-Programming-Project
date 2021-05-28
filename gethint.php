<?php
require_once('./php/show-blog.php');
$q = $_REQUEST["q"];
$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  $result = getContains($q);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $hint .= "<a style = 'text-decoration: None;' href='detail.php?id=". $row['blog_id'] ."'> " . $row['blog_title'] . " - " . $row['blog_date'] . "</a><br>";
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>