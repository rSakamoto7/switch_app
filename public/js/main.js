let weight = document.getElementById("weight");
let click = document.getElementById("click");
let noise = document.getElementById("noise");
let response = document.getElementById("response");

let find_switch = document.getElementById("find_switch");

find_switch.addEventListener('click', function(){
    if(weight.value==0 && click.value==0 && noise.value==0 && response.value==0){
        alert("条件を最低1つ選択してから、ボタンをクリックして下さい");
        event.preventDefault();
    } else {
        return true;
    }
});