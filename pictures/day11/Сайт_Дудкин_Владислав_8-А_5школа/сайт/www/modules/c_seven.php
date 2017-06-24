<?php
include('./db.php');
$ath = mysql_query("select * from `seven` ");
if($ath)
{
  while($seven = mysql_fetch_array($ath))
  {
echo '
<div class="row about">
  		<div class="col-md-7">
  		<h4 class="text-center">'.$seven['title'].'</h4>
  		<p class="text-left">'.$seven['description'].'</p>
   		</div>
      <div class="col-md-5">
      <div class="text-center">
      <img class="image" width="400" height="299" src="'.$seven['image'].'" alt="...">
      </div></div>
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