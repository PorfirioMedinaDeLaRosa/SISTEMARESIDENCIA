<?php

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]
?>


<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				
				<li class="pull-center">
					<?php if(!isset($_SESSION["asesor_id"])):?>
    
    <?php else:?>
      <a class="btn-exit-system"  > <i class="zmdi zmdi-power"></i></a>
     
    <?php endif;?>
				</li>

				
			</ul>