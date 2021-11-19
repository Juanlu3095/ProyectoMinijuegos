//const lista = require("../json/game-cards.json");

//let mi_lista = fopen("../json/game-cards.json", 0);

//file_length = flength(mi_lista); 
//content = fread(mi_lista, file_length);
//const foto1=[lista.tres_en_raya.Image]

//const card2= document.getElementById("card_dos");

//console.log(content);
data = {
    "tres_en_raya":[
        {
        "Name": "Tres en Raya",
        "Desc": "También conocido como 3 en línea, es un juego de lápiz y papel entre dos jugadores: O y X, que marcan los espacios de un tablero de 3×3 alternadamente.",
        "Image": "<img src='img/icono-raya.jpg'>"
        }
    ]
};




console.log(data["tres_en_raya"][0]["Name"])

//Funciones para la carta del 3 en raya
function card_one(){
    document.getElementById("img").innerHTML = data["tres_en_raya"][0]["Image"];
}

function card_one_name(){
    document.getElementById("tlt_one").innerHTML = data["tres_en_raya"][0]["Name"];
}

function card_one_desc(){
document.getElementById("desc_one").innerHTML = data["tres_en_raya"][0]["Desc"];
}