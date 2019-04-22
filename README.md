# PHPMailer para Phpost Risus
Este complemento te ayudará a que puedas tener un servidor SMTP para poder realizar los envíos de correos electrónicos de tu web.

## Instalacion
1 - Descomprime el contenido de la carpeta "**SRC**" dentro de la raíz de tu sitio.

2 -Entran a su cpanel y se dirigen **Cuentas de correo electrónicos**
![PASO 1](https://i.imgur.com/MVcTTn3.png)

3 - Luego le dan al botón crear
![PASO 2](https://i.imgur.com/grJ9R0s.png)

4 - Completan la información necesario como la imagen
![PASO 3](https://i.imgur.com/YHz4Xaz.png)

5 - Una vez creado le dan al botón **Check EMail**
![PASO 4](https://i.imgur.com/rbyu66q.png)

6 - Ingresa al archivo **/inc/class/c.emails.php** y cambia los datos de las variables por los de **Mail Client Manual Settings**
````
    var $setup_host = 'TU HOST DE CORREO SMTP'; /* mail.mozzfirev4x.skn1.com (A) */
    var $setup_address = 'TU CORREO'; /* ej: administrador@mozzfirev4x.skn1.com (B) */
    var $setup_password = 'TU CONTRASENA'; /* La contraseña generada (C) */
    var $setup_port = 'TU PUERTO SMTP'; /* SMTP Port: 465 solamente el número (D) */
````

_Asegurate de que los datos sean para un servidor SMTP SSL._
 * A disfrutar!

# Topic original
[Enviar E-mails por Servidor SMTP con PHPMailer](https://www.phpost.net/foro/topic/32094-mod-enviar-e-mails-por-servidor-smtp-con-phpmailer/)
Por **1TSR4SC11**
