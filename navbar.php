<?php  
include('dbcon.php');
require_once('librarian/PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>  		
	
	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li class="divider-vertical"></li><li class=""><a  rel="tooltip"  data-placement="bottom" title="Home" id="home"   href="index.php"><i class="icon-home icon-large"></i>&nbsp;Почетна</a> </li>
					<li class="divider-vertical"></li>
					
					
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="Click Here to About" id="login" href="info3.php"><i class="icon-info-sign icon-large"></i>&nbsp;Информации</a> 
					</li>
					<li class="divider-vertical"></li>
					<?php
						include('dropdown_knigi.php');
					?>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="Click here to log in" id="login" href="login.php"><i class="icon-user icon-large"></i>&nbsp;Најави се</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="Click Here to register" id="login" href="librarian/register.php"><i class="icon-info-sign icon-large"></i>&nbsp;Регистрирај се</a> 
					</li>
					
				
					<li class="divider-vertical"></li>
					<li class="signup"><span class="sg"></span></li>
					</ul>

			

                    
						

                    </div>
                </div>
            </div>
        </div>
   

	     	