<?php
include '../conexion.php';
$conexion=conectar();
/*************************************************/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
/*************************************************/
//Campos que van hacia la tabla personas
	$cedula        =  $_POST['cedula'];
	$nombre	       =  strtoupper($_POST['nombre']);
	$apellido      =  strtoupper($_POST['apellido']);
/************************************************/
//Campos que van hacia la tabla contacto
	$email     =  strtoupper($_POST['email']);
	$telefono  =  $_POST['telefono'];
/************************************************/
//Campos que van hacia la tabla direccion
	$estado     =  $_POST['estado'];
	$municipio  =  $_POST['municipio'];
	$parroquia  =  $_POST['parroquia']; 
	$direccion     =  strtoupper( $_POST['direccion']);
/************************************************/
//Campos que van hacia la tabla planes_personas
	$plan=1;// el numero 1 pertenece a el plan de solicitudes para saber que ID corresponde a caba plan consulten la tabla planes
	$hoy = date("j- n-Y");
/************************************************/
//Campos que van hacia la tabla comercios
	$rif   =  strtoupper($_POST['rif']);
	$nombre_comercio = $_POST['nombre_comercio'];
	$area_productiva = $_POST['area_productiva'];
/*************************************************/
$sql1="SELECT * FROM personas WHERE cedula='$cedula'";
$query1=pg_query($conexion,$sql1);
		$d=pg_fetch_array($query1);	
		$b=$cedula;
		$s=$d['cedula'];
		if (!$s) {
			$sql="INSERT INTO personas (cedula,nombre,apellido) VALUES ('$cedula','$nombre','$apellido') RETURNING cedula";
				$query=pg_query($conexion,$sql);
					if ($query) {	
							$sql2="SELECT * FROM personas WHERE cedula='$cedula'";
								$query2=pg_query($sql2);
							$fila=pg_fetch_array($query2);
							$id=$fila['id_persona'];// variable que toma el ultimo id que se inserto
							//***************************************************************************************************************//
							$sql3="INSERT INTO contacto (telefono,email,id_persona_contacto) VALUES ('$telefono','$email',$id)";
								$query3=pg_query($sql3);
							$sql4="INSERT INTO direccion (estado,municipio,parroquia,direccion_exacta,id_persona_direccion) VALUES ('$estado','$municipio','$parroquia','$direccion',$id)";
								$query4=pg_query($sql4);
							$sql5="INSERT INTO planes_personas (key_id_planes,key_id_personas,fecha_registro) VALUES ('$plan','$id','$hoy')";
								$query5=pg_query($sql5);
							$sql6="INSERT INTO comercios (rif,nombre_comercio,area_productiva,id_persona_comercio) VALUES ('$rif','$nombre_comercio','$area_productiva','$id')";
								$query6=pg_query($sql6);
							if ($query6) {
								/*$mail = new PHPMailer(true);
									try {
											//Server settings
											$mail->SMTPDebug = 0;                                       // Enable verbose debug output
											$mail->isSMTP();                                            // Set mailer to use SMTP
											$mail->Host       = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
											$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
											$mail->Username   = 'agroproductivo.gmsyt@gmail.com';              // SMTP username
											$mail->Password   = 'ja.010203';                            // SMTP password
											$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
											$mail->Port       = 587;                                    // TCP port to connect to
											//Recipients
											$mail->setFrom('agroproductivo.gmsyt@gmail.com', 'Fundacion Gran Mision Saber y Trabajo');
											$mail->addAddress($email,$nombre);     // Add a recipient
											// Content
											$mail->isHTML(true);                                  // Set email format to HTML
											$mail->Subject = 'Registro en el Acompañamiento Agro Productivo Completado';
											$mail->Body    = 'Felicidades su registro en el Acompañamiento Agro Productivo fue Exitoso en los proximos dias sera contactado por nuestro Personal " Por la  Soberania  Juntos Podemos"';
											$mail->send();
											echo 'Mesnsaje Enviado';
										}catch (Exception $e) {
													echo " Error: {$mail->ErrorInfo}";
												}*/
								echo '  <script type="text/javascript">
								alert("¡Su registro fue completado con exito!");
										document.location.href ="../index.html";
								</script>';				
							}
					}				
	}else{
			echo '  <script type="text/javascript">
						alert("¡Usted ya se encuentra registrado!);
						document.location.href ="../index.html";
					</script>';	
		}
?>