/* 
3 fonctions existent pour créer des animations :
setInterval()
setTimeout()
requestAnimationFrame()
*/

let label = document.querySelector('.timer');
let time;
let idTimer;
let idTimeout;

function timer(){
    time = parseInt(label.innerHTML);
    time++;
    if(time % 10 == 0){
        label.style.backgroundColor = '#' + changeColor();
    }
    label.innerHTML = time;
}

// setInterval()
document.querySelector('.start').addEventListener('click', () => {
    // annule l'effet du setTimeout au clic sur le bouton start.
    clearTimeout(idTimeout);
    idTimer = setInterval(timer, 1000);
});

document.querySelector('.stop').addEventListener('click', () => {
    clearInterval(idTimer);
    // reset l'écran au bout de cinq secondes d'inactivité.
    idTimeout = setTimeout(autoReset, 5000);
});

document.querySelector('.reset').addEventListener('click', () => {
    clearInterval(idTimer);
    label.innerHTML = 0;
});


function changeColor() {
    return Math.floor(Math.random()*16777215).toString(16);
}


function autoReset(){
    label.innerHTML = 0;
}


/////////////////////////////////////////////////////////////////////////////////////////

/* 

DEUXIEME SOLUTION AVEC TIMER SIMPLE.

let label = document.querySelector('.timer');
let time;
let idTimer; 

function timer(){
    time = parseInt(label.innerHTML);
    time++;
    if(time % 10 == 0){
        label.style.backgroundColor = '#' + changeColor();
    }

    label.innerHTML = time;
}
// setInterval()
document.querySelector('.start').addEventListener('click', () => {
    idTimer = setInterval(timer, 1000);
});

document.querySelector('.stop').addEventListener('click', () => {
    clearInterval(idTimer);
});

document.querySelector('.reset').addEventListener('click', () => {
    clearInterval(idTimer);
    label.innerHTML = 0;
});


function changeColor () {
    return Math.floor(Math.random()*16777215).toString(16);
}

*/