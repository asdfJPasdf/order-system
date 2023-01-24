<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<div class="jumbotron bg-primary text-white text-center">
		<h1>Home</h1>
		</div>
		<div class="container">
  <div class="row">
    <div class="col-md-11">
      <!--Left Content-->
    </div>
    <div class="col-md-1 float-right">
	<button class="btn" onclick="return confirm('Wollen Sie sich wirklich ausloggen?')"><a href="<?php echo $url ?>home_controller/logout">Ausloggen <i class="bi bi-box-arrow-right"></i></a></button>
    </div>
  </div>
</div>
	
  
