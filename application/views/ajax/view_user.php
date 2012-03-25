<!--view user info including logs, and classes handled for teachers-->
<?php
$logs	= array(
			'id'=>'view_logs',
			'name'=>'view_logs',
			'value'=>'View Logs',
			'content'=>'View Logs',
			'class'=>'medium orange'
		);
?>
<div id="modal_header">
<h4>View User Information - <?php echo strtoupper($page[2]) .', '. ucwords($page[0]) . ' ' . ucwords($page[1]);  ?></h4>
</div>
<div class="container">

<!--USER INFO-->
<pre>
<?php echo $page[3]; ?>
</pre>

<!--CLASSES HANDLED(IF TEACHER)-->

<p>
<a href="/zenoir/index.php/ajax_loader/view/user_logs" data-id="<?php echo $page[4]; ?>" class="lightbox"><?php echo form_button($logs); ?></a>
</p>
</div>