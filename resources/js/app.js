import './bootstrap';

// Agrandir l'image

    const imgorigine = document.querySelectorAll('#imgorigine');
    const imgzoom = document.getElementById('imgzoom');
    const imgzoomsrc = document.getElementById('imgzoomsrc');

    if(imgorigine && imgzoom && imgzoomsrc){
        imgorigine.forEach(element => {
            element.addEventListener('click', function(){
                imgzoomsrc.src = this.src
                imgzoom.style.display = 'block'
            })
        })
    }


    let closed = document.getElementsByClassName("closed")
    
    for(let c of closed) 
    {
        c.addEventListener("click", function() {
            imgzoom.style.display = 'none'
        })
    }

// Rajouter des lignes de photo lors de l'ajout de l'album

document.addEventListener('DOMContentLoaded', function() {
    const ajouterPhotoBouton = document.querySelector('.ajouterphoto');
    const photosContainer = document.getElementById('photos-container');
    const photoModele = document.querySelector('.createalbumphoto');

    ajouterPhotoBouton.addEventListener('click', function(e) {
        e.preventDefault();
        const ChampPhoto = photoModele.cloneNode(true);
        photosContainer.appendChild(ChampPhoto);
        const supprimerChampBouton = document.querySelectorAll('.supprimerphoto');
        deletePhoto(supprimerChampBouton);
    });

    function deletePhoto(supprimerChampBouton) {
        supprimerChampBouton.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const ChampPhoto = this.parentElement;
                photosContainer.removeChild(ChampPhoto);
            });
        });
    }

    const supprimerChampBouton = document.querySelectorAll('.supprimerphoto');
    deletePhoto(supprimerChampBouton);

});



