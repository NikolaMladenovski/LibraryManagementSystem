     <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Почетна</a></li>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Админи</a></li>
					<?php 
					include('dropdown.php');
					?>
					<li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Книги</a></li>
					<li><a href="e_knigi.php"><i class="icon-book icon-large"></i>&nbsp;Е-книги</a></li>
					<li><a href="nastani.php"><i class="icon-book icon-large"></i>&nbsp;Настани</a></li>

					<li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Корисници</a></li>
					
				
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Одјави се</a></li>
					</ul>
					 
                    </div>
                </div>
            </div>
        </div>