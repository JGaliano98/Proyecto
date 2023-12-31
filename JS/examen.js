window.addEventListener("load", function(){

    var divpreguntas = document.getElementById("Enunciado");

    var foto = document.getElementById("foto");

    var divExamen=document.getElementById("examen");

    var indexPreguntaActual = 0;
    const coleccionPreguntas = [];

    

    fetch("../Proyecto/Forms/generaPreguntas.html") //Plantilla de las preguntas
            .then(x=>x.text())
            .then(y=>{
                
                var contenedor = document.createElement("div");
                contenedor.innerHTML=y; //objeto dom
               
                var pregunta = contenedor.firstChild; //entro a su hijo y me quedo con el

                fetch("../Proyecto/json.json")
                    .then(x=>x.json()) //Mete la pregunta en el json
                    .then(y=>{  //la y es la pregunta. Aqui se descarga la pregunta y la recorre en el for
                        for (let i=0; i<y.length;i++){

                            var pregAux=pregunta.cloneNode(true); //CloneNode hace copia exacta de la estructura de la pregunta. Con el true, haces tambien copia del contenido de la pregunta.
                            if (i>0){
                               pregAux.classList.add("oculta");
                            }
                            coleccionPreguntas.push(pregAux);
                            pregAux.getElementsByClassName("enunciado")[0].innerHTML=y[i].enunciado;
                            var foto = document.createElement("img"); //Creamos el elemento imagen
                            foto.src = y[i].URL; //Cogemos la foto y la mostramos.
                            pregAux.getElementsByClassName("foto")[0].appendChild(foto);
                            pregAux.getElementsByClassName("respuesta1")[0].innerHTML=y[i].respuesta1; 
                            pregAux.getElementsByClassName("respuesta2")[0].innerHTML=y[i].respuesta2; 
                            pregAux.getElementsByClassName("respuesta3")[0].innerHTML=y[i].respuesta3; 
                            
                            var resps = pregAux.getElementsByClassName("respuestas");
                            for(let j = 0; j < resps.length; j++)
                            {
                                resps[j].name += i;
                            }
                            

                            pregAux.getElementsByClassName("botonBorrar")[0].onclick = function()
                            {
                                var auxPadre = this;
                                while (!auxPadre.classList.contains("pregunta")) 
                                {
                                    auxPadre = auxPadre.parentNode; 
                                }

                                var respuestasMar = auxPadre.getElementsByClassName("respuestas");
                                for(let i = 0; i < respuestasMar.length; i++)
                                {
                                    respuestasMar[i].checked = false;
                                }
                            } 

                            pregAux.querySelector(".anterior").addEventListener("click", function(){
                                if(indexPreguntaActual<(coleccionPreguntas.length-1)){
                                    coleccionPreguntas[indexPreguntaActual].classList.add("oculta");
                                    indexPreguntaActual--;
                                    coleccionPreguntas[indexPreguntaActual].classList.remove("oculta");
                                }

                            });

                            pregAux.querySelector(".siguiente").addEventListener("click", function(){
                                if (indexPreguntaActual<(coleccionPreguntas.length-1)){
                                    coleccionPreguntas[indexPreguntaActual].classList.add("oculta");
                                    indexPreguntaActual++;
                                    coleccionPreguntas[indexPreguntaActual].classList.remove("oculta");
                                }
                            });


                            divExamen.appendChild(pregAux);
                        }
                    })

            })

})