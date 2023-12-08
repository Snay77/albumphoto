import './bootstrap';

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