<div class="row popularPosts">
<?php
include('./db.php');
$ath = mysql_query("select * from `news` LIMIT 3");
if($ath)
{
  while($news = mysql_fetch_array($ath))
  {
    echo '
    <div class="col-md-4 post">
    <h4 class="text-center"><a href="/index.php?page=view&id='.$news['id'].'">'.$news['title'].'</a></h4><hr>
      <div class="post_object_small">'.$news['image'].'<hr></div>
      <div class="decription">
      <p>'.$news['description'].'</p></div>
      <p class="post_info"><span class="post_date">'.$news['date'].'</span>
        <span class="post_more"><a href="/index.php?page=view&id='.$news['id'].'" >Подробнее</a></span>
        </p>
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
</div>