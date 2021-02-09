<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<div class="sticky-header header-section ">

	<div class="header-left">
		<button id="showLeftPush"><i class="fa fa-bars"></i></button>
	</div>

	<div class="header-right">
		<div class="profile_details">		
			<ul>
				<li class="dropdown profile_details_drop">										
					<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<div class="profile_img">	
							<span class="prfil-img"><img src="img/pp.png" alt=""> </span> 
							<div class="user-name">
								<p><?php echo $_SESSION['name'] ?></p>
							</div>

							<i class="fa fa-angle-down lnr"></i>
							<i class="fa fa-angle-up lnr"></i>
							<div class="clearfix"></div>	
						</div>	
					</a>

					<ul class="dropdown-menu drp-mnu">
						<li> <a href="../modules/log_out.php"><i class="fa fa-sign-out"></i> Déconnexion</a> </li>
					</ul>
				</li>
			</ul>
		</div>			
	</div>	
</div>

<script src="js/classie.js"></script>
<script>
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
	showLeftPush = document.getElementById( 'showLeftPush' ),
	body = document.body;
				
	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeftPush' );
	};
			
	function disableOther( button ) {
		if( button !== 'showLeftPush' ) {
			classie.toggle( showLeftPush, 'disabled' );
		}
	}
</script>


