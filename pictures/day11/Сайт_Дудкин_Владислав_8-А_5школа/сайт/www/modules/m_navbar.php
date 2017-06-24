<div class="menu">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    	<div class="navbar-header ">
      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      	</button>
      	<a class="navbar-brand logo" href="#">
        <img alt="" width="40" height="40" src="img/site/logo.png"></a>
    	</div>
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     	<ul class="nav navbar-nav ">
<li id="item1"<?php if($arr['currentPage'] == 'home'){echo 'class="active"';}else{echo '';}?>><a href="/">Головна</a></li>
<li id="item2"<?php if($arr['currentPage'] == 'history'){echo 'class="active"';}else{echo '';}?>><a href="index.php?page=history">Історія міста</a></li>
        <li id="item3"<?php if($arr['currentPage'] == 'seven'){echo 'class="active"';}else{echo '';}?>><a href="index.php?page=seven">7 чудес Нікополя</a></li>
        <li id="item4"<?php if($arr['currentPage'] == 'travel'){echo 'class="active"';}else{echo '';}?>><a href="index.php?page=travel">Подорож-Online</a></li>
		    <li id="item5"<?php if($arr['currentPage'] == 'webcams'){echo 'class="active"';}else{echo '';}?>><a href="index.php?page=webcams">Веб-камери міста</a></li>
        <li id="item5"<?php if($arr['currentPage'] == 'news'){echo 'class="active"';}else{echo '';}?>><a href="index.php?page=news">Новини</a></li>
      	</ul>
    	</div>
      </div>
			</nav>

	</div>