<?php
include('./db.php');
$ath = mysql_query("select * from `webcams` ");
if($ath)
{
  $counter =0;
  while($cam = mysql_fetch_array($ath))
  {
    if($counter == 0)
    {
        echo '
            <div class="row web_camera">
            <h4 class="text-center">Название района</h4>';
    }
        echo '
            <div class="col-md-4 item1">
            <div class="image"><a href="'.$cam['video_url'].'" target="_blank"><img width="360" height="200" src="'.$cam['image'].'" alt=""></a>
            <p class="text-center">'.$cam['title'].'</p></div></div>
        ';
        $counter++;

    if($counter == 3)
    {
        echo '</div>';
          $counter = 0;
    }
        
}
}
?>