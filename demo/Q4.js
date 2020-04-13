var next = document.getElementById("next");
// next.addEventListener('click',nextPage);

next.onclick = function(){
    if(!document.getElementById('correct').checked)
    {
        move();
    }
    else{
        location.href = "Q5.html"
    }
}
function move()
{
    location.href = "lost.html"
}