<?php

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idGT =$_SESSION["division_id"]
?>


<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				
				<li class="pull-center">
					<?php if(!isset($_SESSION["division_id"])):?>
    
    <?php else:?>
      <a class="btn-exit-system"  > <i class="zmdi zmdi-power"></i></a>
     
    <?php endif;?>
				</li>

				
			</ul>