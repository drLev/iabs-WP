<?php
$arr;
Tokens($arr);
function Tokens(&$out)
{
  $currentPage;
if(isset($_GET['page']) && $_GET['page'] != ''){$currentPage = $_GET['page'];}
else{$currentPage='home';}
$out['currentPage']=$currentPage;
  switch ($currentPage)	{
      case 'home':
      $out['title'] = "Головна";
      $out['includeFile']="m_history,m_posts,m_popularEat";
      $out['slider'] =true;
      break;
      case 'history':
      $out['title'] = "Історія міста";
      $out['includeFile']="c_history";
      $out['slider'] =true;
      break;
      case 'seven':
      $out['title'] = "7 чудес Нікополя";
      $out['includeFile']="c_seven";
      $out['slider'] =true;
      break;
      case 'travel':
      $out['title'] = "Подорож-Online";
      $out['includeFile']="c_travel";
      $out['slider'] =false;
      break;
       case 'webcams':
      $out['title'] = "Веб-камери міста";
      $out['includeFile']="c_webcams";
      $out['slider'] =true;
      break;
       case 'news':
      $out['title'] = "Новини";
      $out['includeFile']="c_news";
      $out['slider'] =true;
      break;
       case 'view':
      $out['title'] = "Статья";
      $out['post_id']=$_GET['id'];
      $out['includeFile']="c_view";
      $out['slider'] =true;
      break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo($arr['title']);?></title>
    <link rel="shortcut icon" href="img/site/favicon.png" type="image/png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
    <script type="text/javascript">
  $(document).ready(function()
    {
  $("#slide").carousel("pause");
  $(".item1").click(ClickItem1);
  $(".item2").click(ClickItem2);
  $(".item3").click(ClickItem3);
    });
    </script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container wrapper">

<div class="header">
<?php
include_once('/modules/m_navbar.php');
if($arr['slider']){include_once('/modules/m_slider.php');}
?>
</div>
<div class="content">
<?php
$temp = explode (',', $arr['includeFile']);
for ($i=0; $i < count($temp); $i++) 
{ 
  include_once('/modules/'.$temp[$i].'.php');
}
?>
</div>
<div class="footer">
<?php
include_once('/modules/m_footer.php');
?>
</div>

</div>
</body>
</html>
