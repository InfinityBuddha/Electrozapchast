var modalWindow = document.querySelector('.modal-section');
var button = document.getElementById('btn-modal');
var buttonClose = document.querySelector('.modal__icon-close');

var ESC_BUTTON_CODE = 27;

var openModalWindow = function(evt) {
  evt.preventDefault();
  modalWindow.style.display = 'block';
}

var closeModalWindow = function() {
  modalWindow.style.display = 'none';
}

window.onkeydown = function(evt) {
  if(evt.keyCode === ESC_BUTTON_CODE) {
    buttonClose.style.fill = 'red';
      modalWindow.style.display = 'none';
  }
}

buttonClose.addEventListener('click', closeModalWindow);
button.addEventListener('click', openModalWindow);



