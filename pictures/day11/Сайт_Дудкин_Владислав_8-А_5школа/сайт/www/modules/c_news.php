<?php
include('./db.php');
$ath = mysql_query("select * from `news` ");
if($ath)
{
  $c=0;
  while($newsPage = mysql_fetch_array($ath))
  {
    if($c == 0)
    {
        echo '<div class="row popularPosts">';
    }
    echo '
    <div class="col-md-4 post">
    <h4 class="text-center"><a href="/index.php?page=view&id='.$newsPage['id'].'">'.$newsPage['title'].'</a></h4><hr>
      <div class="post_object">'.$newsPage['image'].'<hr></div>
      <div class="description"><p>'.$newsPage['description'].'</p></div>
      <p class="post_info"><span class="post_date">'.$newsPage['date'].'</span>
        <span class="post_more"><a href="/index.php?page=view&id='.$newsPage['id'].'">Подробнее</a></span></p>
    </div>
    ';
    $c++;
    if($c == 3)
    {
        echo '</div>';
          $c = 0;
    }
     
  }
}
else
{
  echo " ".mysql_error();
  exit();
}
?>