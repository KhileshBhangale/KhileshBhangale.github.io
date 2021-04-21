function demo(){
    var demo =document.getElementById('demo');
    demo.style.display="block";
}
    
function keyPressed(val)
{
document.getElementById("I").value+=val
}
//function for evaluation
function solve()
{
let x = document.getElementById("I").value
let y = eval(x)
document.getElementById("I").value = y
}
//function for clearing the display
function clr()
{
document.getElementById("I").value = ""
}
function remove()
{
var strng=document.getElementById("I").value;
document.getElementById("I").value=strng.substring(0,strng.length-1)
}
function square(){
var num = document.getElementById("I").value;
var root = Math.sqrt(num);
document.getElementById("I").value=root;
}

$(document).ready(function(){
$("#myBtn").click(function(){
$("#demo").modal();
});
});

var count = 3600;
var counter = setInterval(timer, 1000); //1000 will  run it every 1 second

function timer() {
    count = count - 1;
    if (count == -1) {
        clearInterval(counter);
        return;
    }

    var seconds = count % 60;
    var minutes = Math.floor(count / 60);
    var hours = Math.floor(minutes / 60);
    minutes %= 60;
    hours %= 60;

    document.getElementById("timer").innerHTML ="Time left"+ ": " + minutes + ":" + seconds;
}
