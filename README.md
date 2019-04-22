# PHPMailer para Phpost Risus
Este complemento te ayudará a que puedas tener un servidor SMTP para poder realizar los envíos de correos electrónicos de tu web.

## Instalacion

* Descarga la última release [aquí](https://github.com/rascii/PhpMailerForPhpostRisus/releases/latest).
* Descomprime el contenido de la carpeta "**SRC**" dentro de la raíz de tu sitio.
* Ingresa al archivo **/inc/class/c.emails.php** y cambia los datos de las variables por los tuyos:
````
	var $setup_host = 'TU HOST DE CORREO SMTP';
	var $setup_address = 'TU CORREO';
	var $setup_password = 'TU CONTRASENA';
    var $setup_port = 'TU PUERTO SMTP';
````
_Asegurate de que los datos sean para un servidor SMTP SSL._
 * A disfrutar!

## Soporte

Si requieres de ayuda, por favor, ingresa un nuevo ticket en "issues".


## Enlaces

[Topic en Phpost Forum](https://www.phpost.net/foro/topic/32094-mod-enviar-e-mails-por-servidor-smtp-con-phpmailer/).
