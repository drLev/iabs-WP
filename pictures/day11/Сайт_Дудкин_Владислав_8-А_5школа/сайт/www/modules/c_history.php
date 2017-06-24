<?php
include('./db.php');
$ath = mysql_query("select * from `history` ");
if($ath)
{
  while($history = mysql_fetch_array($ath))
  {
echo '
<div class="row about">
   		<div class="col-md-5">
      <div class="text-center">
      <img class="image" src="'.$history['image'].'" alt="...">
      </div></div>
  		<div class="col-md-7">
  		<h4 class="text-center">'.$history['title'].'</h4>
  		<p class="text-left">'.$history['description'].'</p>
   		</div>
	</div>
  ';
  }
}
else
{
  echo " ".mysql_error();
  exit();
}
  ?>