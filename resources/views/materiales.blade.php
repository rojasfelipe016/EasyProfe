
<!doctype html>
<html >
    	 <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/estiloPrincipal.css') }}">
        	
       <script src="https://www.gstatic.com/firebasejs/4.8.0/firebase.js"></script>
   		
			<script  src="js/logout.js"></script>
       
       		 </head>
		 <body>	


        <nav class="navbar navbar-default navbar-fixed-top">
     		<div class="container-fluid ">
     			<br>
     				
     			<div class="row">
            				
     			  		<div class="col-md-8 ">
     			  				
     			  				<a href="/" class="navbar-brand "><img src="/img/easy.png" width="150" height="150"  /></a>
     			  				
     			  				<ul class="nav nav-tabs navbar-right  border-right: 1px solid black;">
									<li role="presentation"><a href="#listar">Lista materiales</a></li>
     			  					<li role="presentation"><a href="#subir">Subir material</a></li>
     			  					<button  id="btnLogout" class="btn btn-action ">Logout</button>
					
									
								</ul>
							

     			  	</div>
			
     	      </div>

	       </div>
        </nav>

        		<section id="listar">
					<div class="container-titulo-listar">
						
							<div class="row">
							<div class="col-md-12 col-sm-8 col-xs-6">
					  			<div class="titulo-listar">
									<figure class="imagen-titulo">
											<img src="/img/materiales.png"/>
									</figure>
					  			</div>
							</div>
						</div>
					
				
								</div><!--Fin titulo listar -->
					
					<div class="contenedor-lista" > <!--aca se almacena la lista  -->
					<div id="listaArchivos">

					</div>
					</div>
				
				</section>

				<section id="subir">
					<div class="container-titulo-subir">
						
							<div class="row">
							<div class="col-md-12 col-sm-8 col-xs-6">
					  			<div class="titulo-subir">
									<figure class="imagen-titulo">
											<img src="/img/subir.png"/>
									</figure>
					  			</div>
							</div>
						</div>
					
				
				</div><!--fin titulo subir -->
					

					<div class="contenedor-subir"><!--contenedor del contnedor barra-->
						


					<div class="contenedor-barra" >
								<select id="asignatura">
								 <option value="matematicas">Matemáticas</option>
 								 <option value="lenguaje">Lenguaje</option>
  								<option value="fisica">Física</option>
  									<option value="historia">Historia</option>
  											<option value="quimica">Química</option>
									</select>

							<progress value="0" max="100" id="uploader">0%</progress>
							<input type="file" value="upload" id="fileButton" />

							<script>
  			
					//Get elements
					var uploader =document.getElementById('uploader');
					var fileButton=document.getElementById('fileButton');

					var asignatura=document.getElementById('asignatura');
				

					var archivosRef;
						//inicializar
						window.onload =inicializar;	
						
						function inicializar(){

						archivosRef = firebase.database().ref().child("archivos");//DB

						 Listar();
						
						}
					//listen for file selection
					fileButton.addEventListener('change', function(e){

						//Get file
						var file = e.target.files[0];

						//create storage ref
					
							var storageRef = firebase.storage().ref('Materiales/' + file.name);

					

						 Listar();
						
						//Upload file
					

						var task = storageRef.put(file);
						//update progress bar
						task.on('state_changed',

								function progress(snapshot){
									var percentage = (snapshot.bytesTransferred/snapshot.totalBytes) * 100;
									uploader.value = percentage;
								},
								function error(err){

								},
								function complete(){
										var downloadURL = task.snapshot.downloadURL;

										agregaDB(asignatura,file.name, downloadURL);
								}
						);			
					});
							function Listar(){
								archivosRef.on("value", function(snapshot){
									var datos = snapshot.val();
									var result ="";
									

									for(var key in datos){

										result += '<label>"' + datos[key].asignatura + '"</label>' + '<a href="' + datos[key].url + '"</a>' + "<br>" +'<label>"' + datos[key].nombre + '"</label>';

									

									}
										document.getElementById("listaArchivos").innerHTML = result;
								})
							}

							function agregaDB(asignaturaNom,nombreArchivo, urlDown){
								archivosRef.push({asignatura : asignaturaNom,nombre: nombreArchivo, url: urlDown});
							}
							

					</script>



				</div><!--contneedor barra-->
				
				</div>
			</div>
				
			
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
  			<script src="http://code.jquery.com/jquery-latest.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     </body>
</html>

    