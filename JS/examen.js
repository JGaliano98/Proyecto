window.addEventListener("load", function(){

    var anterior = document.getElementById("botonAnterior");

    var siguiente = document.getElementById("botonSiguiente");

    var terminar = document.getElementById("botonTerminarTest");

    var divpreguntas = document.getElementById("Enunciado");

    var foto = document.getElementById("foto");

    var divExamen=document.getElementById("examen");

    

    fetch("Forms/generaExamen.html")
            .then(x=>x.text())
            .then(y=>{
                
                var contenedor = document.createElement("div");
                contenedor.innerHTML=y; //objeto dom
               
                var pregunta = contenedor.firstChild; //entro a su hijo y me quedo con el

                fetch("json.json")
                    .then(x=>x.json()) //Mete la pregunta en el json
                    .then(y=>{  //la y es la pregunta. Aqui se descarga la pregunta y la recorre en el for
                        for (let i=0; i<y.length;i++){

                            var pregAux=pregunta.cloneNode(true); //CloneNode hace copia exacta de la estructura de la pregunta. Con el true, haces tambien copia del contenido de la pregunta.
                            pregAux.getElementsByClassName("Enunciado")[0].innerHTML=y[i].Enunciado;
                            pregAux.getElementsByClassName("respuesta1")[0].innerHTML=y[i].respuesta1; 
                            pregAux.getElementsByClassName("respuesta2")[0].innerHTML=y[i].respuesta2; 
                            pregAux.getElementsByClassName("respuesta3")[0].innerHTML=y[i].respuesta3; 
                            
                            divExamen.appendChild(pregAux);
                        }
                    })

            })
})