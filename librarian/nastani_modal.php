	<?php
	echo "
	<div id=\"nastani_modal".$id."\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
		<div class=\"modal-body\" style=\"text-align:left;\">
			<div class=\"alert alert-danger\" style=\"font-weight:bold;\">".$event_name."<span style=\"font-weight:normal; font-size:0.8em;\"> - ".$date_added."</span></div>
			<div style=\"width:250px; margin: 0px 0px 0px 5px; \" class=\"pull-right\">
				<img src=\"".$img_path."\" alt=\"Mountains\" style=\"width:250px; height: 250px;\">
				
				<p style=\"font-weight:bold; padding: 5px;\">".$img_caption."</p>
				
			</div>".			
			$event_dscr."
			
		</div>
		<div class=\"modal-footer\">
			<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"icon-remove icon-large\"></i>&nbsp;Затвори</button>
		</div>
    </div>";
	
	?>
