<?php

	

	require "PHPMailer/Exception.php";
	require "PHPMailer/OAuth.php";
	require "PHPMailer/PHPMailer.php";
	require "PHPMailer/POP3.php";
	require "PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	class Mensagem {
		private $email = null;
		private $nome = null;
		private $mensagem = null;
		

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function mensagemValida() {
			if(empty($this->email) || empty($this->nome) || empty($this->mensagem)) {
				return false;
			}

			return true;
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	if($mensagem->mensagemValida() == true){
		echo "todos os campos";
	} else{
		header('Location: index.php?error=sim&#sec-contact');
	};

	$mail = new PHPMailer(true);
	try {
			//Server settings
			$mail->SMTPDebug = 2;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'SEUEMAIL@GMAIL.COM

';                     //SMTP username
			$mail->Password   = 'jfS$mfG&';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('SEUEMAIL@GMAIL.COM

', 'Atendimento Hapvida');
			$mail->addAddress('SEUEMAIL@GMAIL.COM
');     //Add a recipient
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = $mensagem->__get('nome');
			$mail->Body    = 'Para contato: '.$mensagem->__get('email').'<br>'. 'Mensagem do cliente: '. $mensagem->__get('mensagem');
			$mail->AltBody = 'É necessário utilizar um cliente que suporte HTML para enviar o email :(';
			$continue = true;
			if($continue){
				header('Location: index.php?email=sim');
			}
			$mail->send();
			
			
	} catch (Exception $e) {
			
			echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde.";
			echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}
?>

