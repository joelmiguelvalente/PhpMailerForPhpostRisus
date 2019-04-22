# PHPMailer para Phpost Risus
Este complemento te ayudará a que puedas tener un servidor SMTP para poder realizar los envíos de correos electrónicos de tu web.

## Instalacion
* Descomprime el contenido de la carpeta "**SRC**" dentro de la raíz de tu sitio.
* Ingresa al archivo **/inc/class/c.emails.php** y cambia los datos de las variables por los tuyos:
````
    var $setup_host = 'TU HOST DE CORREO SMTP'; /* mail.mozzfirev4x.skn1.com (A) */
    var $setup_address = 'TU CORREO'; /* ej: administrador@mozzfirev4x.skn1.com (B) */
    var $setup_password = 'TU CONTRASENA'; /* La contraseña generada (C) */
    var $setup_port = 'TU PUERTO SMTP'; /* SMTP Port: 465 solamente el número (D) */
````
_Asegurate de que los datos sean para un servidor SMTP SSL._
 * A disfrutar!

(https://i.imgur.com/MVcTTn3.png)

# Topic original
[Enviar E-mails por Servidor SMTP con PHPMailer](https://www.phpost.net/foro/topic/32094-mod-enviar-e-mails-por-servidor-smtp-con-phpmailer/)
Por **1TSR4SC11**
