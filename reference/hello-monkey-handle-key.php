<?php

	// if the caller pressed anything but 1 or 2 send them back
	if($_REQUEST['Digits'] != '1' and $_REQUEST['Digits'] != '2') {
		header("Location: hello-monkey.php");
		die;
	}
	
	// otherwise, if 1 was pressed we Dial 3105551212. If 2 
	// we make an audio recording up to 30 seconds long.
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<?php if ($_REQUEST['Digits'] == '1') { ?>
	<Dial>+447764942885</Dial>
	<Say>The call failed or the remote party hung up.  Goodbye.</Say>
<?php } elseif ($_REQUEST['Digits'] == '2') { ?>
	<Say>Record your monkey howl after the tone.</Say>
	<Record maxLength="30" action="hello-monkey-handle-recording.php" />
<?php } ?>
</Response>
