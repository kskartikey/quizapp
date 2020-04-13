var next = document.getElementById("next");
next.onclick = function(){
    if(!document.getElementById('correct').checked)
    {
        move();
    }
    else{
        location.href = "Q2.html"
    }
}
function move()
{
    location.href = "lost.html"
}