	<div id="delete_notification<?php echo $notif_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Дали сте сигурни дека сакате да ја избришете нотификацијата?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_notification.php<?php echo '?id='.$notif_id; ?>">Да</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Затвори</button>
		</div>
    </div>
	
