(function(){

/*
function creer_image_carrousel

*/

    console.log("vive JS")
    let carrousel = document.querySelector('.carrousel')
    let bouton = document.querySelector('.bouton__ouvrir')
    let carrousel__x = document.querySelector('.carrousel__x')
    let galerie = document.querySelector('.galerie')
    console.log(galerie.tagName);
    let carrousel__figure = document.querySelector('.carrousel__figure')
    let form = document.querySelector('.carrousel__form');

    /*création dynamique d'img dans le carrousel*/
 
 
 



////////////////////////////

    let galerie__imgs = galerie.querySelectorAll('img')
    console.log(galerie__imgs)
    let index = 0


    for (const elm of galerie__imgs) {

creer_image_carrousel(elm, index)
creer_radio_carrousel(index)
index = index + 1
    }






    function creer_radio_carrousel(index){
        let carrousel__radio = document.createElement('input');
        carrousel__radio.classList.add("carrousel__radio");
        carrousel__radio.type = 'radio';
        carrousel__radio.name = 'radioCarrousel';
        carrousel__radio.dataset.index = index;
        form.appendChild(carrousel__radio);
        //ajouter un écouteur permettant de changer l'image du carrousel selon l'index du radio
        //carrousel__img.children[index].sttyle.opacity = 1; pour changer l'opacité de l'image
        carrousel__radio.addEventListener('click', function(){
            let index = this.dataset.index;
            let carrousel__imgs = document.querySelectorAll('.carrousel__img');
            for (const img of carrousel__imgs) {
                img.style.opacity = 0;
            }
            carrousel__imgs[index].style.opacity = 1;
        });
    }

function creer_image_carrousel(elm, index){
    let carrousel__img = document.createElement('img');
    carrousel__img.classList.add('carrousel__img');
    carrousel__img.src = elm.src; 
    carrousel__img.dataset.index = index;

    console.log(elm.src)

    carrousel__figure.appendChild(carrousel__img);
}




bouton.addEventListener('mousedown', function(){
    carrousel.classList.add('carrousel--ouvrir') // ouvrir le carrousel
    document.querySelector('body').style.overflow = "hidden"
 
})
/* Écouteur pour fermer la boîte modale */
carrousel__x.addEventListener('mousedown', function(){
    
    carrousel.classList.remove('carrousel--ouvrir') // fermer le carrousel
    document.querySelector('body').style.overflow = "visible"


    console.log('fermer carrousel')
})


/*

    carrousel__img.src = galerie__img.src;
    console.log(carrousel__img.src);
 
    carrousel__figure.appendChild(carrousel__img);
 


    let galerie__imgs = galerie.querySelectorAll('img');
    console.log(galerie__imgs);
    for (const elm of galerie__imgs) {
        console.log(elm.src);

        let carrousel__img = document.createElement('img');z
       carrousel__img.src = elm.src;
       carrousel__img.classList.add('carrousel__img');
       carrousel.classList.add('carrousel--ouvrir');
        carrousel__img.dataset.index = index;
        carrousel__figure.appendChild(carrousel__img);
    


    }
 



    bouton.addEventListener('click', function(){
      
    });
 
    boutonFermer.addEventListener('click', function(){
        carrousel.classList.remove('carrousel--ouvrir');


    });

   
*/




})();