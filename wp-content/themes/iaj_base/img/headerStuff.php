<?php



if (isset($_POST['formName'])) {


	$ip = $_POST['ip']; 
	$httpref = $_POST['httpref']; 
	$httpagent = $_POST['httpagent']; 
	$formname = $_POST['formName'];


	switch($formname) {
		case "social":
		$visitor = $_POST['visitorName']; 
		$visitormail = $_POST['visitorEmail']; 
		$visitorphone = $_POST['visitorPhone']; 
		$visitorcomment = $_POST['visitorComment'];
		break;

		case "professional":
		$venueName = $_POST['venueName'];
		$venueContact = $_POST['venueContact'];
		$venueContactEmail = $_POST['venueContactEmail'];
		$venuePhone = $_POST['venuePhone'];
		$venueSize = $_POST['venueSize'];
		$setLength = $_POST['setLength'];
		$venueComment = $_POST['visitorcomment'];
		$visitor = $venueContact;
		$visitormail = $venueContactEmail;
		$visitorcomment = $venueComment;
		break;
	}



	if (eregi('http:', $notes)) {
		die ("Do NOT try that! ! ");
	}

	if(empty($visitormail)) 

	{
		echo "<div id = 'mailError'>";
		echo "<div>";
		echo "<h2>Email was not sent</h2>";
		echo "<h2>Enter valid e-mail</h2>"; 
		echo "</div></div>";

	} elseif (empty($visitorcomment)) {		
		echo "<div id = 'mailError'>";
		echo "<div>";
		echo "<h2>Email was not sent</h2>";
		echo "<h2>You should probably say something!</h2>"; 
		echo "</div></div>";
	} else {

		$todayis = date("l, F j, Y, g:i a") ;

		$attn = $attn ; 
		$subject = "$visitor sent a $formname message" ; 

		$notes = stripcslashes($notes); 


		switch($formname) {

			case "social":	
			$message = "Sent on $todayis [EST] :\n		
				Message: $visitorcomment \n 
				From: $visitor ($visitormail)\n
				Phone Number: $visitorphone";

			$from = "From: $visitormail\r\n";
			break;

			case "professional":
			$message = "Sent on $todayis [EST] :\n	

				Venue Contact: $venueContact \n  	                       
				Venue: $venueName\n                             
				Venue Phone Number: $venuePhone\n                                                 
				Visitor Comment: $venueComment";                                                          

			$from = "From: $visitormail\r\n"; 
			break;                                      



		};

		mail("formintake@iamjeremyvest.com", $subject, $message, $from);

		if ($formname == "social")
		{
			mail("jeremy@iamjeremyvest.com", $subject, $message, $from);

		}
		echo "<div id = 'mailSuccess'>";
		echo "<div>";
		echo "<h2>Thank You!</h2>"; 
		echo "</div></div>";

	}
}

if (isset($_POST['formComments'])) {

	$fn = "content/comments.txt";
	$content =  '<div class = "comment ' . $_POST["id"] . '">
		<div class = "commentBody">
		<p>' . $_POST["formComments"] . '</p>
		</div>
		<div class = "commentFooter">
		<h4>' . $_POST["formCommentor"] . ' </h4>
		<div class = "timestamp">
		' . date("l F jS, Y") . '
		</div>
		</div>
		</div>


		';



	$fh = fopen($fn, 'r');
	$theData = fread($fh, filesize($fn));
	fclose($fh);

	$fullContent = $content . $theData;

	$fw = fopen($fn,"r+");
	fwrite($fw,$fullContent);
	fclose($fp);


};


$dir = "media/webcasts/";
$pattern = '\.(flv)$';

$newstamp = 0;
$newname = "";
$dc = opendir($dir);
while ($fn = readdir($dc)) {
	# Eliminate current directory, parent directory
	if (ereg('^\.{1,2}$',$fn)) continue;
	# Eliminate other pages not in pattern
	if (! ereg($pattern,$fn)) continue;
	$timedat = filemtime("$dir/$fn");
	if ($timedat > $newstamp) {
		$newstamp = $timedat;
		$newname = $fn;
	}
}
# $timedat is the time for the latest file
# $newname is the name of the latest file

?>