var dep = ["dependent1", "dependent2", "dependent3","dependent4","dependent5" ];
function hide()
{
    for(var i=0;i<5;i++)
    {
        var divs=dep[i];
        document.getElementById(divs).style.display= "none";
    }
}
function show()
{
    for(var i=0;i<5;i++)
    {
        var divs=dep[i];
        document.getElementById(divs).style.display= "inline-block";
        document.getElementById(divs).style.width= "100%";
    }
}