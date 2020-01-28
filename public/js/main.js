let weight = document.getElementById("weight");
let click = document.getElementById("click");
let noise = document.getElementById("noise");
let response = document.getElementById("response");

let find_switch = document.getElementById("find_switch");

find_switch.addEventListener('click', function(){
    if(weight.value==0 && click.value==0 && noise.value==0 && response.value==0){
        find_switch.style.display = "block";
        find_switch.dataset.toggle = "modal";
        find_switch.dataset.target = "#checkmodal";
        event.preventDefault();
    } else {
        find_switch.style.display = "none";
        find_switch.dataset.toggle = "";
        find_switch.dataset.target = "";
        return true;
    }
});