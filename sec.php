<!DOCTYPE html>
<html lang="en">
<head>
  <title>Send Message</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Send Message</h2>
  <p id="message"></p>
	<div class="form-group">
       <label for="email">Sender ID:</label>
       <input type="email" class="form-control" id="senderid" placeholder="Enter Sender ID" name="senderid">
    </div>
    <div class="form-group">
		<label for="pwd">Mobile No.:</label>
		<input type="text" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile">
    </div>
    <div class="form-group">
		<label for="comment">Message:</label>
		<textarea class="form-control" rows="5" id="message" name="Message" placeholder="Write Your Message Here...."></textarea>
	</div>
    <button type="submit" class="btn btn-primary" id="send">Send Message</button>
 
</div>
<script>
	$("#send").click(function(){
		$.ajax({
					type: "POST",
					url: "process.php",
					data:{
						senderid: $('#senderid').val(),
						mobile: $('#mobile').val(),
						message: $('#message').val()
					},
					success: function(data){
							var objJSON = JSON.parse(data);
							$('#message').html(objJSON.message); 
					}
		});
	});
</script>
</body>
</html>
<?php
$senderID = $_POST['senderid'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
	/*MESSAGE CODE*/
	/* Your authentication key */
	$authKey = "234557688009432n";
	/* Multiple mobiles numbers separated by comma */
	$mobileNumber = $mobile;
	/* Sender ID,While using route4 sender id should be 6 characters long. */
	$senderId = $senderID;
	/* Your message to send, Add URL encoding here. */
	
	$message = urlencode($message);
	/* Define route */
	$route = "route=4";
	/* Prepare you post parameters */
	$postData = array(
		'authkey' => $authKey,
		'mobiles' => $mobileNumber,
		'message' => $message,
		'sender' => $senderId,
		'route' => $route
	);
	/* API URL*/
	$url="https://www.fast2sms.com/dev/bulk";
	/* init the resource */
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $postData
		/*,CURLOPT_FOLLOWLOCATION => true */
	));
	/* Ignore SSL certificate verification */
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	/* get response */
	$output = curl_exec($ch);
	/* Print error if any */
	if(curl_errno($ch))
	{
		echo 'error:' . curl_error($ch);
	}
	else{
		$array = array(
			"message"    => $output
		);
	}
	curl_close($ch);
	//MESSAGE CODE END
	print json_encode($array);
?>
