window.onload = function(){
    window.onclick = function(element){
        var panel = element.target.nextElementSibling;
    var menu = document.getElementById('nav-box');
        console.log(element.target.id);
        if(element.target.id == document.getElementById('drop-nav').id){
        if(menu.style.height == "0px" || menu.style.height == 0){
            menu.style.height = "400px";
       }else{
            menu.style.height = "0px";
        }
    }
    }
}