<?php
	session_start();
?>
<html>
	<head>
		<title>
			privacidad
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<a class="navbar-brand" href="#">
		<img src="images/escudo.png" style="float: right;
								object-fit: cover;
								width: 70px;
								padding: 10px;">
            </a>
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
		Security Flash
		</h1>
		
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Reservar entradas</a>";
						}
					?>
				</li>

<section id="main-content">
	
		<article>
			<header>
				<h1>Nuestra politica de privacidad</h1>
                     
			</header>
			
			<img src="images/fondo1.jpg"/> 
			
			<div class="content">
                 <h3>Política de Privacidad y Tratamiento de los Datos Personales. </h3> 
<br>
<br>

<center>
                 <h4>CONSIDERACIONES GENERALES</h4>
                              </center>
<br>
<strong>
Conscientes de la importancia que tiene la protección y el buen manejo de la información personal suministrada los titulares de la información, LA AGENCIA DE VIAJES Y TURISMO AVIATUR S.A.S., <br>- en adelante AVIATUR,<br> quien actúa como responsable de la información recibida, ha diseñado la presente política y procedimientos que en conjunto permiten hacer un uso adecuado de sus datos personales.
<br>
<br>


</strong>
<em>
Conforme a lo dispuesto en el artículo 15 de la Constitución Política de Colombia, el cual desarrolla el derecho fundamental al hábeas data, referido al derecho que tienen todos los ciudadanos de conocer, actualizar, <br>rectificar los datos personales que existan sobre ella en bases de datos y en archivos tanto de bases públicas como privadas, lo cual se relaciona indefectiblemente con el manejo y tratamiento de la información que los receptores de información personal deben tener en cuenta.<br> Dicho derecho se ha desarrollado mediante la expedición de la Ley Estatutaria 1581 de 2012 y el Decreto Reglamentario 1377 de 2013, con base en los cuales AVIATUR en calidad de RESPONSABLE de los datos personales que recibe, maneja y trata la información y procede así a expedir la presente política de tratamiento de datos personales, la cual se pone en conocimiento del público para que conozcan la manera como AVIATUR trata su información. Lo dispuesto en la presente política de tratamiento de datos personales es de obligado cumplimiento por parte de AVIATUR, sus administradores, trabajadores, contratistas y terceros con los que AVIATUR entable relaciones de cualquier índole.

                              </em>
<br>
<br>
<br>
<center>
OBJETIVO
</center>
<br>
<br>

Con la implementación de ésta política, se pretende garantizar la reserva de la información y la seguridad sobre el tratamiento que se le dará a la misma a todos los clientes,<br> proveedores, empleados y terceros de quienes AVIATUR ha obtenido legalmente información y datos personales conforme a los lineamientos establecidos por la ley regulatoria del derecho al Habeas Data. Asimismo, a través de la expedición de la presente política se da cumplimiento a lo previsto en el literal K del artículo 17 de la referida ley.
<br>
DEFINICIONES
<br>
<br>
<br>
<i>
Autorización: Consentimiento previo, expreso e informado del titular del dato para llevar a caboel tratamiento. Esta puede ser escrita, verbal o mediante conductas inequívocas que permitan concluir de forma razonable que el titular otorgó autorización.
Base de Datos: Es el conjunto organizado de Datos Personales que sean objeto de tratamiento, electrónico o no, cualquiera que fuere la modalidad de su formación, almacenamiento, organización y acceso.<br>
Consulta: Solicitud del titular del dato o de las personas autorizadas por éste o por la ley param conocer la información que reposa sobre él en bases de datos o archivos.<br>
Dato personal: Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables. Estos datos se clasifican en sensibles, públicos, privados y semiprivados.
Dato personal sensible: Información que afecta la intimidad de la persona o cuyo uso indebido puede generar su discriminación, tales como aquellos que revelen el origen racial o étnico, <br>la orientación política, las convicciones religiosas o filosóficas, la pertenencia a sindicatos, <br>organizaciones sociales, de derechos humanos o que promueva intereses de cualquier partido político o que garanticen los derechos y garantías de partidos políticos de oposición, así como los datos relativos a la salud, a la vida sexual y los datos biométricos (huellas dactilares, entre otros).
Para efectos de la presente política, AVIATUR advierte el carácter facultativo que tiene el titular del dato personal para suministrar este tipo de información en los casos en los cuales, <br>eventualmente, puedan solicitarse.
Dato personal público: Es el dato calificado como tal según los mandatos de la ley o de la Constitución Política y todos aquellos que no sean semiprivados o privados. Son públicos, entre otros, los datos contenidos en documentos públicos, registros públicos, gacetas y boletines oficiales y <br>sentencias judiciales debidamente ejecutoriadas que no estén sometidos a reserva, los relativos al estado civil de las personas, a su profesión u oficio y a su calidad de comerciante o de servidor público. Son públicos los datos personales existentes en el registro mercantil de las Cámaras de Comercio (Artículo 26 del C.Co.).
<br>
<br>
<br>
<br>
                              </i>
Asimismo, son datos públicos, los que, en virtud de una decisión del titular o de un mandato legal, se encuentren en archivos de libre acceso y consulta. Estos datos pueden ser obtenidos y ofrecidos sin reserva alguna y sin importar si hacen alusión a información general, privada o personal.
Dato personal privado. Es el dato que por su naturaleza íntima o reservada sólo es relevante para la persona titular del dato. Ejemplos: libros de los comerciantes, documentos privados,<br> información extraída a partir de la inspección del domicilio.<br>
Dato personal semiprivado. Es semiprivado el dato que no tiene naturaleza íntima, reservada, ni pública y cuyo conocimiento o divulgación puede interesar no sólo a su titular sino a cierto sector o grupo de personas o a la sociedad en general, como, entre otros, el dato referente al cumplimiento e incumplimiento de las obligaciones financieras o los datos relativos a las relaciones con las entidades de la seguridad social.
Responsable del Tratamiento: Persona que por sí misma o en asocio con otros, decida sobre la base de datos y/o el tratamiento de los datos.
Encargado del tratamiento: Persona que realiza el tratamiento de datos por cuenta del responsable del tratamiento.
Estar “Autorizado”, es AVIATUR y todas las personas bajo la responsabilidad del mismo, que por virtud de la autorización y de la Política tienen legitimidad para someter a tratamiento los datos personales del titular. El Autorizado incluye al género de los Habilitados.<br>
“Habilitación” o estar “Habilitado”, es la legitimación que expresamente y por escrito mediante contrato o documento que haga sus veces, otorgue AVIATUR a terceros, en cumplimiento de la ley aplicable,<br> para el tratamiento de datos personales, convirtiendo a tales terceros en encargados del tratamiento de los datos personales entregados o puestos a disposición.
Reclamo: Solicitud del titular del dato o las personas autorizadas por éste o por la ley para corregir, actualizar o suprimir sus datos personales o cuando adviertan que existe un presunto incumplimiento del régimen de protección de datos, según el artículo Art. 15 de la Ley 1581 de 2012.
Titular del dato: Es la persona natural a que se refieren la información.
Tratamiento: Cualquier operación o conjunto de operaciones sobre datos personales como, entre otros, la recolección, el almacenamiento, el uso, la circulación o supresión de esa clase de información.<br>
Transmisión: Tratamiento de datos personales que implica la comunicación de los mismos dentro (transmisión nacional) o fuera de Colombia (transmisión internacional) y que tiene por objeto la realización de un tratamiento por el encargado por cuenta del responsable.<br>
Transferencia: La transferencia de datos tiene lugar cuando el responsable y/o encargado del tratamiento de datos personales, ubicado en Colombia, envía la información o los datos personales a un receptor,<br> que a su vez es responsable del tratamiento y se encuentra dentro o fuera del país.
Requisito de procedibilidad: El titular o causahabiente sólo podrá elevar queja ante la Superintendencia de Industria y Comercio una vez haya agotado el trámite de consulta o reclamo ante el responsable del tratamiento o encargado del tratamiento, lo anterior según el Artículo 16 de la Ley 1581 de 2012.
PRINCIPIOS PARA EL TRATAMIENTO DE DATOS PERSONALES
El tratamiento de datos personales debe realizarse respetando las normas generales y especiales sobre la materia y para actividades permitidas por la ley. En consecuencia, se aplican para efectos de la presente política, los siguientes principios:<br>
<br>
<br>
<br>
<br>
<strong>
<i>
Principio de legalidad: El tratamiento de datos es una actividad reglamentada que debe sujetarse a lo establecido en la ley y en las demás disposiciones que la desarrollen.
Principio de finalidad: El tratamiento debe obedecer a una finalidad legítima de acuerdo con la Constitución y la Ley.
Principio de libertad: El tratamiento sólo puede ejercerse con el consentimiento, previo, expreso e informado del titular. Los datos personales no podrán ser obtenidos o divulgados sin previa autorización, o en ausencia de mandato legal o judicial que releve el consentimiento.
Principio de veracidad o calidad: La información sujeta a tratamiento debe ser veraz, completa, exacta, actualizada, comprobable y comprensible. Se prohíbe el tratamiento de datos parciales, incompletos,<br> fraccionados o que induzcan a error.
Principio de transparencia: En el tratamiento debe garantizarse el derecho del titular a obtener del responsable del tratamiento, en cualquier momento y sin restricciones, información acerca de la existencia de datos que le conciernan.<br>
Principio de acceso y circulación restringida:strong> El tratamiento se sujeta a los límites que se derivan de la naturaleza de los datos personales, de las disposiciones de la ley y la Constitución. <br><br>En este sentido, el tratamiento sólo podrá hacerse por personas autorizadas por el titular y/o por las personas previstas en la ley.
Principio de seguridad: La información sujeta a Tratamiento por el Responsable del Tratamiento o Encargado del Tratamiento a que se refiere la presente ley, se deberá manejar con las medidas técnicas, <br>humanas y administrativas que sean necesarias para otorgar seguridad a los registros evitando su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento.
Principio de confidencialidad:Todas las personas que intervengan en el tratamiento de datos personales que no tengan la naturaleza de públicos están obligadas a garantizar la reserva de la información, inclusive después de finalizada su relación con alguna de las labores que comprende el tratamiento, pudiendo sólo realizar suministro o comunicación de datos personales cuando ello corresponda al desarrollo de las actividades autorizadas en la presente ley y en los términos de la misma.
Todo nuevo proyecto al interior de la Organización, que implique el Tratamiento de Datos Personales deberá ser consultado con la Gerencia de Seguridad de la Información, que es la persona y dependencia encargada de la función de protección de datos para asegurar el cumplimiento de la política y de lasmedidas necesarias para mantener la confidencialidad del dato personal.
<br>
<br>
<br>
<br>
<i>
                              </strong>
DERECHOS DE LOS TITULARES DE LOS DATOS
En concordancia con las disposiciones legales vigentes, son derechos de los titulares de la informaciónpersonal los siguientes:
      <br>
      <br>
      <mark>
Derecho a conocer, actualizar, rectificar, consultar sus datos personales en cualquier momento frente a AVIATUR respecto a los datos que considere parciales, inexactos, incompletos, fraccionados y aquellos que induzcan a error.
Derecho a solicitar en cualquier momento una prueba de la autorización otorgada a AVIATUR salvo en aquellos casos en los que legalmente el Responsable está liberado de tener autorización para tratar los datos del titular.
Derecho a ser informado por AVIATUR previa solicitud del titular de los datos, respecto del uso que le ha dado a los mismos.<br>
Derecho a presentar ante la Superintendencia de Industria y Comercio las quejas que considere pertinentes para hacer valer su derecho al Habeas Data.<br>
Derecho a revocar la autorización y/o solicitar la supresión de algún dato cuando considere que AVIATUR no ha respetado sus derechos y garantías constitucionales.<br>
Derecho a acceder en forma gratuita a los datos personales que voluntariamente decida compartir con AVIATUR.
La información y/o datos personales que recolectamos de usted, son los siguientes:
</mark>
      <br>
      <br>
      <br>
      <p>
Tipo de persona:
<br>

Natural: nombres y apellidos, tipo de identificación, número de identificación, género, estado civil y fecha de nacimiento, correo electrónico, datos financieros (cuentas bancarias).
<br>
Jurídica: razón social, NIT, dirección, teléfono, celular, correo electrónico, país, ciudad, datos financieros (cuentas bancarias).
<br>
Información necesaria para facilitar el viaje u otros servicios, incluyendo preferencias como clase de viaje, nombres y apellidos de pasajeros (tipo de documento, número de documento, fecha de nacimiento, nombre, apellido, género, email, nacionalidad, fecha de expiración del pasaporte), contactos para casos de accidente o cualquier otra anomalía (nombres y apellidos, teléfono).
<br>
Datos del tarjetahabiente: tipo de documento, número de documento, teléfono, dirección, email, nombres, número de tarjeta, fecha de vencimiento y banco.
<br>
Solicitud de cotización: nombres, apellidos, teléfonos, ciudad y email.
<br>
Información del viaje: tipo de solicitud, destino, fecha de salida, duración, número de adultos, número de niños, categoría de hotel, alimentación, servicios adicionales, servicio de transporte, presupuesto por persona.
<br>
Escríbale a Jean Claude Bessudo: nombres, apellidos, cédula, dirección, teléfono (fijo o celular), ciudad y correo electrónico.
<br>
Chat “ayuda en línea”: nombre, correo electrónico, cual ¿es su pregunta?
<br>
Evalué nuestro sitio: su opinión es muy importante para nosotros mejorar continuamente nuestros canales de atención: nombres, apellidos, email, teléfonos y ciudad.
<br>
Solicitud de reclamación: nombres, apellidos, número de identificación, dirección, teléfonos, ciudad, email y comentarios.
<br>
Reporte de problemas técnicos: nombres, apellidos, dirección, teléfonos, ciudad, email y comentarios.
<br>
Datos biométricos:imágenes, video, audio, huellas dactilares que identifiquen o hagan identificable a nuestros clientes, usuarios o cualquier persona que ingrese o se encuentre o transite en cualquier lugar que AVIATUR haya implementado dispositivos de captura de dicha información.
<br>
Estos datos puedes ser almacenados y/o procesados en servidores ubicados en centro de procesamiento de datos ya sean propios o contratados con proveedores, localizados en distintos países, lo cual es autorizado por nuestros clientes/usuarios, al aceptar la presente política de tratamiento y protección de los datos personales.
<br>
Para mayor información, sobre las empresas que hacen parte del grupo empresarial Aviatur, la identidad, domicilios y formas de contacto puede consultarlo en la siguiente dirección electrónica  http://www.grupoaviatur.com.
      <br>
AVIATUR se reserva el derecho a mejorar, actualizar, modificar, suprimir cualquier tipo de información, contenido, dominio o subdominio, que pudiera aparecer en el sitio web, sin que exista obligación de preaviso, entendiéndose como suficiente con la publicación en los sitios web de Aviatur. Para la solución de peticiones legales o internas y para la prestación u ofrecimiento de nuevos servicios o productos.

      </p>
<br>
<br>
<br>
<br>
<p>
TRATAMIENTO, ALCANCE Y FINALIDADES
AVIATUR informa a los titulares que los datos recolectados de nuestros clientes, contratistas y proveedores podrán ser utilizados para las siguientes finalidades. El tratamiento podrá realizarlo AVIATUR directamente o por intermedio de sus contratistas, consultores, asesores y/o terceros encargados del tratamiento de datos personales, para que lleven a cabo cualquier operación o conjunto de operaciones tales como la recolección, almacenamiento,uso, circulación, supresión, clasificación, transferencia y transmisión (el “Tratamiento”) sobre la totalidad o parte de sus datos personales:
La sustentación de la relación contractual establecida con AVIATUR.
La prestación de servicios relacionados con los productos y servicios ofrecidos.
La realización de todas las actividades relacionadas con el servicio o producto, se incluirá en una lista de correos electrónicos para el envío del boletín.
Enviar información sobre cambios en las condiciones de los servicios y productos adquiridos, y notificarle sobre nuevos servicios o productos.
Gestionar sus solicitudes, aclaraciones, e investigaciones.
Elaborar estudios y programas que son necesarios para determinar hábitos de consumo
El afinamiento de los filtros de seguridad y las reglas de negocio en las transacciones comerciales; confirmar, procesar dichas transacciones, con su entidad financiera, con nuestros proveedores de servicios y con usted mismo.
Realizar evaluaciones periódicas de nuestros productos y servicios a efecto de mejorar la calidad de los mismos.
El envío, por medios tradicionales y electrónicos, de información técnica, operativa y comercial de productos y servicios ofrecidos por AVIATUR, sus asociados o proveedores, actualmente y en el futuro.
La solicitud de encuestas de satisfacción, que no queda obligado a contestar.
Realizar la transmisión y/o transferencia de datos a otras empresas, alianzas comerciales o terceros con el fin de cumplir las obligaciones adquiridas. La transmisión y transferencia podrá efectuarse incluso a terceros países que pueden tener un nivel de protección diferente respecto del colombiano, cuando sea necesario para el cumplimiento de nuestras obligaciones.
Dar cumplimiento a obligaciones contraídas por AVIATUR con sus clientes al momento de adquirir nuestros servicios y productos.
Dar respuesta a consultas, peticiones, quejas y reclamos que sean realizadas por organismos de control y demás autoridades que en virtud de la ley aplicable deban recibir los datos personales.
Cualquier otra actividad de naturaleza similar a las anteriormente descritas que sean necesarias para desarrollar el objeto social de AVIATUR.
Efectuar consultas en distintas bases de datos y fuentes autorizadas (como listas OFAC, ONU, entre otras) necesarias para el control y prevención de fraudes o delitos relacionados con el lavado de activos, de acuerdo con nuestras políticas de prevención y gestión de riesgos - SARLAFT.

<br>
<br>
<br>
<br>
<br>
</p>
<br><br>
<br>
AVIATUR podrá realizar la transferencia de datos a otros Responsables del tratamiento cuando así esté autorizado por el titular de la información o por la ley o por un mandato administrativo o judicial.
<br>
<br>
<br>
TRANSMISIÓN INTERNACIONAL Y NACIONAL DE DATOS A ENCARGADOS<br>

AVIATUR podrá enviar o transmitir datos a uno o varios encargados ubicados dentro o fuera de la República de Colombia en los siguientes casos: a) Cuando cuente con autorización de titular y b) cuando sin contar con la autorización exista entre el Responsable y el encargado un contrato de transmisión de datos.
<br>
<br>

DEBERES DEL RESPONSABLE DEL TRATAMIENTO
<br>

Garantizar al titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de hábeas data.
Solicitar y conservar, en las condiciones previstas en la presente ley, copia de la respectiva autorización otorgada por el titular.
Informar debidamente al titular sobre la finalidad de la recolección y los derechos que le asisten por virtud de la autorización otorgada.
Conservar la información bajo las condiciones de seguridad necesarias para impedir su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento.
Tramitar las consultas y reclamos formulados en los términos señalados en la presente ley.
Adoptar un manual interno de políticas y procedimientos para garantizar el adecuado cumplimiento de la presente ley y en especial, para la atención de consultas y reclamos.
Informar a solicitud del titular sobre el uso dado a sus datos.
Informar a la autoridad de protección de datos cuando se presenten violaciones a los códigos de seguridad y existan riesgos en la administración de la información de los titulares.
Cumplir las instrucciones y requerimientos que imparta la superintendencia de industria y comercio.
DEBERES DE LOS ENCARGADOS DEL TRATAMIENTO
Garantizar al titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de hábeas data.
Conservar la información bajo las condiciones de seguridad necesarias para impedir su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento.
Realizar oportunamente la actualización, rectificación o supresión de los datos en los términos de la presente ley.
Actualizar la información reportada por los responsables del tratamiento dentro de los cinco (5) días hábiles contados a partir de su recibo.
Tramitar las consultas y los reclamos formulados por los titulares en los términos señalados en la presente ley.
Adoptar un manual interno de políticas y procedimientos para garantizar el adecuado cumplimiento de la presente ley y, en especial, para la atención de consultas y reclamos por parte de los titulares.
Abstenerse de circular información que esté siendo controvertida por el titular y cuyo bloqueo haya sido ordenado por la superintendencia de industria y comercio.
Permitir el acceso a la información únicamente a las personas que pueden tener acceso a ella.
Informar a la superintendencia de industria y comercio cuando se presenten violaciones a los códigos de seguridad y existan riesgos en la administración de la información de los titulares.
Cumplir las instrucciones y requerimientos que imparta la superintendencia de industria y comercio.
PETICIONES, QUEJAS Y RECLAMOS
Para efectos de recibir las peticiones, reclamaciones y consultas relacionadas con el manejo y tratamiento de datos personales, AVIATUR ha destinado el correo electrónico privacidad@aviatur.com, para canalizarlas, estudiarlas y contestarlas. Por lo tanto, a dicha dirección podrán enviar sus solicitudes, las cuales se tratarán conforme lo dispone la Ley 1581:

Consultas: Los titulares o sus causahabientes podrán consultar la información personal del titular que repose en nuestra base de datos. AVIATUR suministrará a estos toda la información contenida en el registro individual o que esté vinculada con la identificación del titular. La consulta será atendida en un término máximo de diez (10) días hábiles contados a partir de la fecha de recibo de la misma. Cuando no fuere posible atender la consulta dentro de dicho término, se informará al interesado, y se señalará la fecha en que se atenderá su consulta, la cual en ningún caso podrá superar los cinco (5) días hábiles siguientes al vencimiento del primer término.

Reclamos: El titular o sus causahabientes que consideren que la información contenida en una base de datos debe ser objeto de corrección, actualización o supresión, o cuando adviertan el presunto incumplimiento de cualquiera de los deberes contenidos en la ley, podrán presentar un reclamo ante AVIATUR, el cual será tramitado bajo las siguientes reglas:

El reclamo se formulará mediante solicitud dirigida a AVIATUR con la identificación del titular, la descripción de los hechos que dan lugar al reclamo, la dirección, y acompañando los documentos que se quiera hacer valer. Si el reclamo resulta incompleto, AVIATUR requerirá al interesado dentro de los cinco (5) días siguientes a la recepción del reclamo para que subsane las fallas. Transcurridos dos (2) meses desde la fecha del requerimiento, sin que el solicitante presente la información requerida, se entenderá que ha desistido del reclamo.
Una vez recibido el reclamo completo, se incluirá en la base de datos una leyenda que diga “reclamo en trámite” y el motivo del mismo, en un término no mayor a dos (2) días hábiles. Dicha leyenda deberá mantenerse hasta que el reclamo sea decidido.
El término máximo para atender el reclamo será de quince (15) días hábiles contados a partir del día siguiente a la fecha de su recibo. Cuando no fuere posible atender el reclamo dentro de dicho término, se informará al interesado y se señalará la fecha en que se atenderá su reclamo, la cual en ningún caso podrá superar los ocho (8) días hábiles siguientes al vencimiento del primer término.
En todo caso, el titular o el causahabiente sólo podrá elevar queja ante la Superintendencia de Industria y Comercio una vez haya agotado el trámite de consulta o reclamo ante AVIATUR.
El área responsable para efectuar la recepción y trámite de las reclamaciones es la Gerencia de Seguridad de la Información.
La solicitud de supresión de la información y la revocatoria de la autorización no procederá cuando el titular tenga un deber legal o contractual de permanecer en la base de datos.
DATOS DE RESPONSABLE DEL TRATAMIENTO
Razón social: Agencia de Viajes y Turismo Aviatur S.A.S

Dirección: Avenida 19 # 4 – 62, Bogotá, Colombia.

Correo Electrónico: privacidad@aviatur.com

Teléfono: (+57 1) 3817111

Página web: www.aviatur.com
<br>
<br>
<br>
<br>

PREGUNTAS O SUGERENCIAS
Si usted tiene alguna pregunta o consulta acerca del proceso de recolección, <br>tratamiento o transferencia de su información personal, o consideren que la información contenida en una base de datos debe ser objeto de corrección, actualización o supresión por favor envíenos un mensaje a la siguiente cuenta de correo electrónico: privacidad@aviatur.com.
<br>
<br>
Para mayor información, sobre AVIATUR, la identidad, domicilio y formas de contacto puede consultarlo en la siguiente dirección www.aviatur.com. Este sitio web, tiene consigo mismo los términos y condiciones, aplicables a los servicios y productos publicados los cuales pueden ser consultados en cualquier momento para mayor información.
<br>
<br>
<br>
<br>
<br>
<br>
      <center>
      <em>VIGENCIA<br>
</em>
      </center>
      <br>
      <br>

AVIATUR se reserva el derecho a modificar la presente política para adaptarla a novedades legislativas o jurisprudenciales, así como a buenas prácticas del sector del turismo y los demás sectores de la economía que hacen parte del grupo empresarial. En dichos supuestos, AVIATUR anunciará en esta página los cambios introducidos con razonable antelación a su puesta en práctica.

Esta política fue modificada y publicada en los sitios web de Aviatur el 06 de julio de 2013 y entra en vigencia a partir de la fecha de publicación. La última actualización se realizó el día 22 de mayo de 2019.
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->

      <footer>
			<?php
			require_once('redessociales.php');

	           ?>
			
		</footer>
</html>