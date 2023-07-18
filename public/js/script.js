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

//LETTER ANIMATION Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  

  

