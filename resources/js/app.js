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

    const ajouterphoto = document.querySelector(".ajouter-photo")