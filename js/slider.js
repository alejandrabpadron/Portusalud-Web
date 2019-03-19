var imagenes=new Array(
        'img/imgslider1.jpg',
        'img/imgslider1.jpg'
    );
function rotarImagenes()
    {
        
        var index=Math.floor((Math.random()*imagenes.length));
 
        
        document.getElementById("imagen").src=imagenes[index];

    }
    onload=function()
    {
        
        rotarImagenes();
 
        
        setInterval(rotarImagenes,3000);
    }