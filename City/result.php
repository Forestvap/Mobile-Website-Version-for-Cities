<?php
$name = $_POST['name'];
?>

<!DOCTYPE html> 
<html> 
	<head> 
	<title>Result</title> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
	</head> 
	<body> 
		<div data-role="page"> 
			<div data-role="header"> 
				<h1>Result</h1> 
			</div>
			<div data-role="content">	
				<?php echo "Your name is ".$name ?>
			</div>		
		</div> 
	</body> 
</html>


