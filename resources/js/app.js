import './bootstrap';

    const imgorigine = document.getElementById('imgorigine');
    const imgzoom = document.getElementById('imgzoom');
    const imgzoomsrc = document.getElementById('imgzoomsrc');

    imgorigine.addEventListener('click', function(){
        imgzoomsrc.src = this.src
        imgzoom.style.display = 'block'
    })

    function fermerimg() {
        imgzoom.style.display = 'none'
    }