<?php

	// make an associative array of callers we know, indexed by phone number
	$people = array(
		"+14158675309"=>"Curious George",
		"+14158675310"=>"Boots",
		"+14158675311"=>"Virgil",
		"+14158675312"=>"Marcel"
	);
	
	// if the caller is known, then greet them by name
	// otherwise, consider them just another monkey
	if(!$name = $people[$_REQUEST['From']])
		$name = "Monkey";
		
	// now greet the caller
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Say>Hello <?php echo $name ?>.</Say>
	<Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
	<Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
		<Say>
			To speak with a real monkey, press 1.  
			Press 2 to record your own monkey howl.  
	  		Press any other key to start over.
	  	</Say>
	</Gather>
</Response>
