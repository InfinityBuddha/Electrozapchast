var modalWindow = document.querySelector('.modal-section');
var buttonContacts = document.getElementById('btn-contacts');
var buttonPromo = document.querySelectorAll('#btn-promo');
var buttonClose = document.querySelector('.modal__icon-close');

var ESC_BUTTON_CODE = 27;

var openModalWindow = function(evt) {
  evt.preventDefault();
  modalWindow.style.display = 'block';
};

var closeModalWindow = function() {
  modalWindow.style.display = 'none';
};

window.onkeydown = function(evt) {
  if(evt.keyCode === ESC_BUTTON_CODE) {
      modalWindow.style.display = 'none';
  }
};

buttonClose.addEventListener('click', closeModalWindow);
buttonContacts.addEventListener('click', openModalWindow);
for (let i=0; i < buttonPromo.length; i++) {
  buttonPromo[i].addEventListener('click', openModalWindow);
}


let formElements = document.querySelector( '.wpcf7' );
let modal = document.querySelector('.modal');

document.addEventListener( 'wpcf7submit', function( event ) {
  // Скрыть элементы формы
  formElements.style.display = 'none';
  let successMessage = document.createElement('div');
  successMessage.className = 'wpcf7-response-output wpcf7-mail-sent-ok';
  successMessage.innerHTML = 'Спасибо за Ваше сообщение. Оно успешно отправлено.';
  modal.appendChild(successMessage);
}, false );
