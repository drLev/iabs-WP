	<div class="slide">
    <div class="row">
      <div id="myCarousel" class="carousel fade" data-ride="carousel">
      <ol class="carousel-indicators">
  <?php
include('./db.php');
$ath = mysql_query("select * from `slider` ");
if($ath)
{
  $nums = mysql_num_rows($ath);
  for ($i=0; $i < ($nums-1); $i++) 
  {
    if($nums > 0 && $i==0)
    {
      echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
    }
    else{echo "";}
      echo '<li data-target="#myCarousel" data-slide-to="'.($i+1).'"></li>';
  }
  echo'</ol><div class="carousel-inner">';
  $cntr = 0;
  while($slider = mysql_fetch_array($ath))
  {
    if($cntr == 0)
    {
      echo '<div class="item active">';
    }

    else{echo '<div class="item">';}
    echo '<img src="'.$slider['image'].'" alt=""></div>
    ';
     $cntr++;
  }
}
else
{
  echo " ".mysql_error();
  exit();
}
?>
</div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span></a>
      </div>
  </div>
<!---
    <div class="slide">
    <div class="row">
      <div id="myCarousel" class="carousel fade" data-ride="carousel">
      <ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="item active"><img src="img/slides/s1.jpg"  alt="">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
            </div>
          </div>
    			<div class="item"><img src="img/slides/s2.jpg"  alt="">
           <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
           </div>
          </div>
    			<div class="item"><img src="img/slides/s3.jpg"  alt="">
          <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
          </div>
          </div>
  			</div>
  			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left"></span>
    		<span class="sr-only">Previous</span></a>
  			<a class="right carousel-control" href="#myCarousel" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right"></span>
    		<span class="sr-only">Next</span></a>
			</div>
	</div>
  --->