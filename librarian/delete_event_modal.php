	
	<div id="delete_event<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Дали сте сигурни дека сакате да го избришете овој настан?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_event.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Да</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Затвори</button>
		</div>
    </div>
	