<div class="row popularPosts">
<?php
include('./db.php');
$ath = mysql_query("select * from `news` WHERE `id`=".$arr['post_id']);
if($ath)
{
  while($news = mysql_fetch_array($ath))
  {
echo '
    <div class="col-md-12 post">
    <h4 class="text-center">'.$news['title'].'</h4><hr>
      <div class="post_object_big">'.$news['image'].'<hr></div>
      <div class="description"><p>'.$news['description'].'</p></div>
      <p class="text-left">Опубликовано: <span class="post_date">'.$news['date'].'</span></p>
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
<div class="comments">
                  <div class="row comment">
                      <div class="col-md-12">
                      <h4 class="text-center">Оставить свой комментарий: </h4>
                        <p class="comment_info"><span class="comment_author"><a href="#">Гость</a></span></p>
                        <div class="comment_avatar"><img width="95" height="95" src="img/avatars/1.jpg" alt=""></div>
                            <div class="comment_input">
                      <textarea class="input" placeholder="Написать комментарий..." name="text" ></textarea>
                              <p class="text-left help"><b>Enter</b> - Новая строка  <b>Shift + Enter</b> - Отправить</p>
                            </div>
                          </div> 
                          </div>
 <?php 
 $ath = mysql_query("select * from `comments` WHERE `post_id`=".$arr['post_id']);
if($ath)
{
	$nums = mysql_num_rows($ath);
	if($nums > 0)
	{
  		while($comment = mysql_fetch_array($ath))
  		{
  		echo '
     	<div class="row comment">
        <div class="col-md-12">
        <h4 class="text-center">Комментарий № '.$comment['id'].':</h4>
        <p class="comment_info"><span class="comment_author"><a href="#">'.$comment['author'].'</a></span>
                  <span class="comment_date"><a  href="#">'.$comment['date'].'</a></span></p>
        <div class="comment_avatar">
        <img  width="95" height="95" src="'.$comment['avatar'].'" alt=""></div>
        <div class="comment_description">
        <p>'.$comment['comment'].'</p>
        </div>
        </div>
    	</div>
    	';    
  		}
  }
  else
  {
  	echo '<div class=" row alert alert-info comment"><p class="text-center">На данный момент комментарии отсутствуют!</p></div>';
  }
}
  
else
{
  echo " ".mysql_error();
  exit();
}
?>
      </div>