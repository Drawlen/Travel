const openPopUp = document.getElementById('open-pop-up');
const openPopUp1 = document.getElementById('open-pop-up1');
const openPopUp2 = document.getElementById('open-pop-up2');
const openPopUp3 = document.getElementById('open-pop-up3');
const openPopUp4 = document.getElementById('open-pop-up4');
const openPopUp5 = document.getElementById('open-pop-up5');


const closePopUp = document.getElementById('pop-up-close');
/*const closePopUp1 = document.getElementById('pop-up-close1');*/


const popUp = document.getElementById('pop-up');

const popUp1 = document.getElementById('pop-up');
const popUp2 = document.getElementById('pop-up');
const popUp3 = document.getElementById('pop-up');
const popUp4 = document.getElementById('pop-up');
const popUp5 = document.getElementById('pop-up');




openPopUp.addEventListener('click', function (e){
    e.preventDefault();
    popUp.classList.add('active');
})

openPopUp1.addEventListener('click', function (e){
    e.preventDefault();
    popUp1.classList.add('active');
})

openPopUp2.addEventListener('click', function (e){
    e.preventDefault();
    popUp2.classList.add('active');
})

openPopUp3.addEventListener('click', function (e){
    e.preventDefault();
    popUp3.classList.add('active');
})

openPopUp4.addEventListener('click', function (e){
    e.preventDefault();
    popUp4.classList.add('active');
})

openPopUp5.addEventListener('click', function (e){
    e.preventDefault();
    popUp5.classList.add('active');
})


closePopUp.addEventListener('click', () =>{
    popUp.classList.remove('active');
})

/*closePopUp1.addEventListener('click', () =>{
    popUp1.classList.remove('active');
})*/
