var plus = document.getElementById('plus');
var minus = document.getElementById('minus');
var number = parseInt(document.getElementById('number').value);

function increaseValue() {
    number = isNaN(number) ? 0 : number;
    if(number<10) {
        number++;
        document.getElementById('number').value = number;
    }
};

function decreaseValue() {
    number = isNaN(number) ? 0 : number;
    if(number>0){
        number--;
        document.getElementById('number').value = number;
    }
}
