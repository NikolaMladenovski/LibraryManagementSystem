	<div id="delete_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Дали сте сигурни?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_student.php<?php echo '?id='.$id; ?>">да</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Затвори</button>
		</div>
    </div>
	
