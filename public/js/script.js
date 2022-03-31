//ICONE REMONTE PAGE
window.addEventListener('scroll', function(){
    // window.scrollY nous permet d'avoir la distance entre le haut et le scroll effectué, c'est une valeur en px
    //console.log(window.scrollY);

    if(window.scrollY > 930){

        document.getElementById('back-to-top').style.display = 'block';
    }else{
        document.getElementById('back-to-top').style.display = 'none';
    }

});


//ANIMATION DIV
let animationDiv = document.querySelectorAll('.animediv');//On sélectionne toutes les classes concernées
console.log(animationDiv);

for(let i = 0; i < animationDiv.length; i++){
    animationDiv[i].addEventListener('click', function(){
        console.log(this.getAttribute('class'));//On récupère la classe
        this.classList.add("animate__pulse") ;//et on ajoute des valeurs à  cette classes
        this.classList.add("animate__animated");

        this.addEventListener('mouseout', function(){//On enlève les classes quand la souris sort de la zone
            this.classList.remove("animate__pulse") ;
            this.classList.remove("animate__animated") ;
        });

    });
}




//METEO API
let villeChoisie = "Rennes";
recupererTemperature(villeChoisie);

let changerDeVille = document.getElementById('changer');
changerDeVille.addEventListener('click', function(){
    villeChoisie = prompt('Quelle ville voulez-vous ?');
    recupererTemperature(villeChoisie);
});

function recupererTemperature(ville) {
    const url = 'https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&appid=1ba3704d74be632698035fc59d31e806&units=metric&lang=fr';

    let requete = new XMLHttpRequest(); // On crée un objet qui nous permet de faire des requêtes
    requete.open('GET', url); // On récupère les données
    requete.responseType = 'json'; // type de donnée JSON
    requete.send(); // On envoie une requête

    // Dès qu'on reçoit une réponse, cette fonction est executée
    requete.onload = function() {
        if (requete.readyState === XMLHttpRequest.DONE) {
            if (requete.status === 200) {
                let reponse = requete.response;
                // console.log(reponse);
                let temperature = reponse.main.temp;
                let ville       = reponse.name;
                // console.log(temperature);
                document.getElementById('temperature-indice').textContent = temperature;
                document.getElementById('ville').textContent = ville;
            }
            else {
                alert('Une erreur s\'est produite');
            }
        }
    }
}