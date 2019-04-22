<?php if (!defined('TS_HEADER')) exit('No puedes acceder a archivos del script.');
/* Información sobre este archivo:
   /!\ Si requiere más información acerca de este archivo, dirigase al enlace:
   ---> https://twitter.com/itsrascii
   ---> Gracias por usar esta modificacion =)
*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class tsEmail {
	
	var $email_info = array();		// REFERENCIA PARA ENVIAR UN EMAIL
	var $emailSubject;
	var $emailHeaders;
	var $emailBody;
	var $emailTo;
	var $is_error;		// SI OCURRE UN ERROR ESTA VARIABLE CONTENDRA EL NUMERO DE ERROR
	var $setup_host = 'TU HOST DE CORREO SMTP';
	var $setup_address = 'TU CORREO';
	var $setup_password = 'TU CONTRASENA';
        var $setup_port = 'TU PUERTO SMTP';
	var $setup_sourcefolder = TS_EXTRA . 'PHPMailer/src/';
	
	/*
		$tsEmailRef : tipo de email
		$tsEmailData: datos del email
	*/
	function tsEmail($tsEmailData,$tsEmailRef){
		$this->email_info = array(
			'ref' => $tsEmailRef,
			'data' => $tsEmailData
		);
	}
	/*
		setEmailInfo()
	*/
	function setEmail(){
		$this->emailSubject = $this->setEmailSubject();
		$this->emailHeaders = $this->setEmailHeaders();
		$this->emailBody = $this->setEmailBody();
		$this->emailTo = $this->email_info['user_email'];
	}
	/*
		sendEmail()
	*/
	function sendEmail(){
		global $tsCore;
		require $this->setup_sourcefolder . 'Exception.php';
		require $this->setup_sourcefolder . 'PHPMailer.php';
		require $this->setup_sourcefolder . 'SMTP.php';
		$smail = new PHPMailer(true);
		try {
		    // https://github.com/PHPMailer/PHPMailer/issues/1209#issuecomment-338898794
		    // $smail->isSMTP();
		    $smail->SMTPDebug = 0; // Se lo cambias por un 2 y mostrará si hay error
		    $smail->Host = $this->setup_host;
		    $smail->SMTPAuth = true;
		    $smail->SMTPOptions = array(
		    'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
		    );
		    $smail->Username = $this->setup_address;
		    $smail->Password = $this->setup_password;
		    $smail->SMTPSecure = 'ssl'; // SSL para puerto 465 || TLS para puerto 587
		    $smail->Port = $this->setup_port;
		
		    $smail->setFrom($this->setup_address, $tsCore->settings['titulo']);
		    $smail->addAddress($this->emailTo);
		
		    $smail->isHTML(true);
		    $smail->Subject = $this->emailSubject;
		    $smail->Body    = $this->emailBody;
		    $smail->AltBody = strip_tags($this->emailBody);
		
		    $smail->send();
		    return true;
		} catch (Exception $e) {
		    return false;
		}
	}
	/*
		setEmailSubject()
	*/
	function setEmailSubject(){
		switch($this->email_info['ref']) {
			case 'signup' :
				$subject = "Por favor completa tu registro.";
			break;
		}
	
		// ENCODE SUBJECT FOR UTF8
		return "=?UTF-8?B?".base64_encode($subject)."?=";
	}
	/*
		setEmailHeaders()
		Se mantiene por compatibilidad
	*/
	function setEmailHeaders(){
		return true;
	}
	/*
		setEmailBody()
	*/
	function setEmailBody(){
		switch($this->email_info['ref']) {
			case 'signup' :
				return $this->setRegisterEmail();
			break;
		}
	}
	/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
}
