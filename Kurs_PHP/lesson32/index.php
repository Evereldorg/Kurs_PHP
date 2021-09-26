<?php 
	session_start();
	if (isset($_POST["send"])) {
		$from = htmlspecialchars($_POST["from"]);
		$to = htmlspecialchars($_POST["to"]);
		$subject = htmlspecialchars($_POST["subject"]);
		$message = htmlspecialchars($_POST["message"]);

		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["message"] = $message;

		$error_from = "";
		$error_to = "";
		$error_subject = "";
		$error_message = "";
		$error = false;
		if ($from == "" || !preg_match("/@/", $from)) {
			$error_from =  "Введите корректный email";
			$error = true;
		}

		if ($to == "" || !preg_match("/@/", $to)) {
			$error_to = "Введите корректный email";
			$error = true;
		}

		if (strlen($subject) == 0) {
			$error_subject =  "Введите тему сообщения";
			$error = true;
		}

		if (strlen($message) == 0) {
			$error_message =  "Введите сообщения";
			$error = true;
		}

		if (!$error) {
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";
			mail($to, $subject, $message);
			header("Location: success.php?send=1");
			exit();
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Обратная связь</title>
</head>
<body>
	<h2>Форма обратной связи</h2>
	<form method="post" name="feedback" action="">
		<label>От кого:</label><br>
		<span style="color:red"><?php echo $error_from; ?></span><br>
		<input type="text" name="from" value="<?php echo $_SESSION["from"]; ?>"><br>
		<label>Кому:</label><br>
		<span style="color:red"><?php echo $error_to; ?></span><br>
		<input type="text" name="to" value="<?php echo $_SESSION["to"]; ?>"><br>
		<label>Тема:</label><br>
		<span style="color:red"><?php echo $error_subject; ?></span><br>
		<input type="text" name="subject" value="<?php echo $_SESSION["subject"]; ?>"><br>
		<label>Сообщение:</label><br>
		<span style="color:red"><?php echo $error_message; ?></span><br>
		<textarea name="message" cols="30" rows="10"><?php echo $_SESSION["message"]; ?></textarea><br>
		<input type="submit" name="send" value="Отправить">
	</form>
</body>
</html>