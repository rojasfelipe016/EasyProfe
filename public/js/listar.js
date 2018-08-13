window.onload = listar;
var archivosRef;
fileButton.addEventListener('change', function(e){

						//Get file
						var file = e.target.files[0];

						//create storage ref
				

						 archivosRef = firebase.database().ref().child("archivos");//DB

						 Listar();
						 });
				function Listar(){
								archivosRef.on("value", function(snapshot){
									var datos = snapshot.val();
									var result ="";
									var nombre="";

									for(var key in datos){
										result += '<label>"' + datos[key].nombre + '"</label>' +'<label>"' + datos[key].url + '"</label>';
									}
										document.getElementById("listaArchivos").innerHTML = result;
								})
							}