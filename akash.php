<?php
		// Authorisation details.
		$username = "kaushikdhruv003@gmail.com";
		$hash = "8c744140cb93d39c0fae29be540cb66cdc8036c9";

		// Configuration variables. Consult http://api.txtlocal.com/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "API Test"; // This is who the message appears to be from.
		$numbers = "+917839016531"; // A single number or a comma-seperated list of numbers
		$message = "This is a test message from the PHP API script.";
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.way2sms.com/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		echo $result = curl_exec($ch); // This is the result from the API
		curl_close($ch);
		echo 'ok';?>