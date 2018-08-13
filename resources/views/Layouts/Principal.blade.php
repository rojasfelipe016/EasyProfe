<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		  <head>
		  <link rel="icon" type="image/png" href="favicon-32x32.png" />
			
				 <script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
				<script src="http://code.jquery.com/jquery-latest.js"></script>
		
				
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<link rel="stylesheet" href="{{ URL::asset('css/estiloPrincipal.css') }}">
		

  		
		    </head>
		 <body>	

				<div class="fullscreen">
					<section class="body1">
						<div class="row" >
							<div class="col-md-12 col-sm-8 colxs-12">
								<div id="my-slider" class="carousel slide" data-ride="carousel" >
										<!--indicadores-->
										<ol class="carousel-indicators">
											<li data-target="#my-slider" data-slide-to="0" class="active"> </li>
											<li data-target="#my-slider" data-slide-to="1" > </li>
										
										</ol>
										<!--contenedor de los slide-->
											<div class="carousel-inner  fill"  role="listbox" >

												<div class="item active">
												 	<img src="/img/educ.jpg" class="img-responsive"/>
												 	<div class="carousel-caption">
															
												 			<h1 style="color: #090909;">Busca a tu profesor particular</h1>
												 			<p style="color: #090909;font-size:26px;">Profesores de todo chile disponibles</p>
												 	</div>
												</div>

												<div class="item">
												 	<img src="/img/educ2.jpg" class="img-responsive"/>
												 	
												 	<div class="carousel-caption texto2">
												 			<h1 style="color: #FFFFFF;">Crees tener deficit atencional</h1>

												 			<p style="color: #FFFFFF;font-size:26px;">Agenda una hora con nuestros psicopedagogos</p>
												 	</div>
												 	
												</div>

											

											</div>

													<a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
													<span class="sr-only">previous</span>
													</a>
													
											<a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
													<span class="sr-only">previous</span>
											</a>
											
								</div><!--my-slider -->
							</div><!--col -->
							</div>
					
						</section>
						
								<section id="body2">
					

				</section>
					
				

				<section id="body3">
					<div class="container-titulo-a">
						
							<div class="row">
							<div class="col-md-12 col-sm-8 col-xs-6">
					  			<div class="titulo-body3">
									<figure class="imagen-titulo">
											<img src="/img/alumnos.png"/>
									</figure>
					  			</div>
							</div>
						</div>
					
				
			</div>
						<div class="img-row">

							<div class="col-md-4 col-sm-4 colxs-12">
								
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/profe.png" width="200" height="200"  />
									</div>
									
									<h3 style="color: #1F1F1D;font-family: Verdana, sans-serif;">Busca a tu profesor</h3>
									<p style="color: #1F1F1D;font-size:18px;font-family: Verdana, sans-serif;">Profesores de todo chile <br>por asignatura</p>
									
								</div>
							</div>
								<div class="col-md-4 col-sm-4 colxs-12">
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/calendar.png" width="230" height="230"  />
										
									</div >

									<div class="text-img2-body3">
									<h3 style="color: #1F1F1D;font-family: Verdana, sans-serif;">Reserva tu clase </h3>
									<p style="color: #1F1F1D;font-size:18px;font-family: Verdana, sans-serif;">Escoge una hora y recibiras el número de <br>contacto del profesor</p>
										
									</p>
									</div>
									
									
								</div>
							</div>
								<div class="col-md-4 col-sm-4 colxs-12">
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/clase.png" width="340" height="340"  />
									</div>
									<div class="text-img3-body3">
									<h3 style="color: #1F1F1D;font-family: Verdana, sans-serif;">Clase confirmada</h3>
									<p style="color: #1F1F1D;font-size:18px;font-family: Verdana, sans-serif;">Se realizara la clase con tu profesor<br> No olvides evaluarlo al final de la clase</p>
									</div>
								

								</div>
							</div>

						</div>
						
				

				</section>

				<section id="body4">
				
				<div class="container-titulo-p">
						
							<div class="row">
							<div class="col-md-12 col-sm-8 col-xs-6">
					  			<div class="titulo-body4">
									<figure class="imagen-titulo">
											<img src="/img/profesores.png"/>
									</figure>
					  			</div>
							</div>
						</div>
					
				
			</div>
			
						<div class="img-row">
							<div class="col-md-4 col-sm-4 colxs-12">
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/cel.png" width="300" height="300"  />
									</div>
									<div class="text-img1-body4">
									<h3 style="color: #FFFFFF;font-family: Verdana, sans-serif;">Ingresa a tus clases</h3>
									<p style="color: #FFFFFF;font-size:18px;font-family: Verdana, sans-serif;">Podrás ver las reservas de hora realizadas por alumnos</p>
									</div>
								</div>
								</div>
								<div class="col-md-4 col-sm-4 colxs-12">
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/cel2.png" width="300" height="300"  />
									</div>
									<div class="text-img2-body4">
									<h3 style="color: #FFFFFF;font-family: Verdana, sans-serif;">Confirma tus clases</h3>
									<p style="color: #FFFFFF;font-size:18px;font-family: Verdana, sans-serif;">Debes aceptar o rechazar la clase<br>el alumno será notificado por la aplicación</p>
									</div>
									
								</div>
								</div>
								<div class="col-md-4 col-sm-4 colxs-12">
								<div class="item text-center">
									<div class="icon-wrap">
										<img src="/img/phone.png" width="235" height="235"  />
									</div>
									
									<h3 style="color: #FFFFFF;font-family: Verdana, sans-serif;">Contacto</h3>
									<p style="color: #FFFFFF;font-size:18px;font-family: Verdana, sans-serif;">Si aceptaste la clase el alumno o sus padres se comunicarán contigo en un plazo máximo de cuatro horas</p>
									
								</div>
							</div>

						</div>
						
				

				</section>

				<section id="body5">
				
				
			<div class="row" >
				<div class="col-md-12 col-sm-8 col-xs-6">
					<div id="my-slider2" class="carousel slide" data-ride="carousel" >
						<div class="container-fluid">
							<div class="row">
					  			<div class="titulo-body5">
									<figure class="imagen-titulo">
											<img src="/img/nosotros.png"/>
									</figure>
					  				</div>
								</div>
							</div>
										
										<!--contenedor de los slide-->
											<div class="carousel-inner fill  "  role="listbox" >

												<div class="item active">
												 	
												 	<div class="carousel-content">
															
												 			<h2 >Hoy en día,Los estudiantes requieren de un apoyo ,que pueda guiarlos en su desarrollo educativo,por esta razón ha habido un gran incremento en la demanda de clases particulares</h2>
												 			
												 	</div>
												</div>

												<div class="item">
												 	
												 	<div class="carousel-content">
												 			<h2 >En EasyProfe entregamos la opción a profesores y alumnos de conectarse mediante nuestra plataforma.<br>Queremos ser parte del desarrollo de competencias de los alumnos</h2>

												 			
												 	</div>
												 	
												</div>

												<div class="item">
												 
												 	<div class="carousel-content">
												 			<h2 >Buscamos utilizar la tecnología para lograr nuestros fines y estaremos siempre mejorando para brindar un mayor apoyo a nuestros alumnos y profesores</h2>
												 			
												 	</div>
												</div>

											</div>

													<a class="left carousel-control" href="#my-slider2" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
													<span class="sr-only">previous</span>
													</a>
													
											<a class="right carousel-control" href="#my-slider2" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
													<span class="sr-only">previous</span>
											</a>
											
								
							</div>
							</div><!--col -->
						</div><!--my-slider -->
				</section>

				<section id="body6">
							
					<div class="container-titulo-login">
						
							<div class="row">
							<div class="col-md-12 col-sm-8 col-xs-6">
					  			<div class="titulo-login">
									<figure class="imagen-titulo">
											<img src="/img/materiales.png"/>
									</figure>
					  			</div>
							</div>
						</div>
					
				
			</div>
						
					
						
						<div class="col-md-8 col-md-offset-2">
							<div class="formulario-contact">
								<div class="row contenedor-form">
								

								<div class="subt-form">
									<p>Ingrese a su cuenta para subir material </p>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<p>Email</p>
										<input class="form-control validate[required]" type="email" id="txtEmail" placeholder="Email@gmail.com (*)"/>
									</div>
									

								<div class="col-xs-6">
									<div class="form-group">
										<p>Contraseña</p>
										<input class="form-control validate[required]" type="password" id="txtPassword" placeholder="Contraseña...(*)"/>
										</div>
									
									<div class="col-md-6 col-md-offset-3">
									<div class="botones">
										
										<button id="btnLogin" class="btn btn-action">Ingrese</button>
										<button id="btnLogout" class="btn btn-action hide">Logout</button>
									</div>

							
									<script  src="js/app.js"></script>
							</div><!--row-->
							</div><!--container-->
					 	</div><!--class-col-md4-->
						
				

				</section>

				<section id="body7">
					
						<div class="col-md-8 col-md-offset-2">
							<div class="formulario-contact">
								<div class="row contenedor-form">
									<form id="formcontacto" method="post">

								<div class="title-form">
									<h1> Contáctanos</h1>
								</div>
								<div class="subt-form">
									<p>Campos obligatorios *</p>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<p>Nombres</p>
										<input class="form-control validate[required]" name="contacto[nombre]" id="contacto_nombre" placeholder="Nombres (*)"/>
									</div>
									<div class="form-group">
										<p>Email</p>
										<input class="form-control validate[required]" name="contacto[email]" id="contacto_email" placeholder="Email (*)"/>
									</div>
								</div>

								<div class="col-xs-6">
									<div class="form-group">
										<p>Apellidos</p>
										<input class="form-control validate[required]" name="contacto[apellidos]" id="contacto_apellidos" placeholder="Apellidos (*)"/>
									</div>
									<div class="form-group">
										<p>Telefono/Celular</p>
										<input class="form-control validate[required]" name="contacto[telefono]" id="contacto_telefono" placeholder="Teléfono/celular (*)"/>
									</div>

									<div class="form-group">
											<p>Ciudad</p>
												<input class="form-control validate[required]" name="contacto[ciudad]" id="contacto_ciudad" placeholder="Ciudad (*)"/>
										</div>
								</div>
								
											

									<div class="form-group">
									<p>Motivo de Contacto</p>
									<textarea class="form-control validate[required]" style="height: 100px;" rows="3" name="contacto[observaciones]" id="contacto_observaciones" placeholder="Motivo del contacto (*) "/>
										</textarea>
									</div>
										<div class="col-md-6 col-md-offset-3">
											<div class="solicitud-info">
												<button class="btn btn-danger" type="submit" value="Contactar" data-toggle="modal" data-target="" id="enviar_contacto">
												<span>
													<img src="/img/easy.png" height="17" width="17" alt=""/>
												</span>
												SOLICITAR INFORMACIÓN
												</button>
											</div>
										</div>
							</form>
						
							</div><!--row-->
							</div><!--container-->
					 	</div><!--class-col-md4-->
					
				</section>
		

		

	
				<section class="container-fluid">

					<div class="row">
						<div class="foot">
								<div class="col-xs-6">
									<img src="/img/easy.png" width="150" height="150"  />
								<p>
									EasyProfe  © 2017 Copyright
								</p>
								</div>
						</div>
					</div>
				</section>
				</div>
			
			
			

     </body>
</html>