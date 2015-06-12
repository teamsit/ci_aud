<title>View Data from Database</title>

	<table border="1" cellpadding="10">
	
	
	<?php 
		echo $row['title'];
		echo $row['content'];

	?>
	
	<a href="<?php echo base_url(); ?>aud/listing/">Go Back</a>
	
	</table>
</body>
</html>