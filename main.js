const openPopUp = document.getElementById('openpopup');
const popup_close = document.getElementById('popup_close');
const PopUp = document.getElementById('popup');

openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popup.classList.add('active');
})

popup_close.addEventListener('click', () =>{
    popup.classList.remove('active');
})

popup_close.addEventListener('click', function(e){
    e.preventDefault();
    popup.classList.remove('active');
})


