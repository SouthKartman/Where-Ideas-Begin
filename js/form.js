// const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

// function switchTheme(e) {
//     if (e.target.checked) {
//         document.documentElement.setAttribute('data-theme', 'dark');
//     }
//     else {
//         document.documentElement.setAttribute('data-theme', 'light');
//     }    
// }

// toggleSwitch.addEventListener('change', switchTheme, false);


// const name = document.getElementById('name');
// const email = document.getElementById('email');
// const message = document.getElementById('message');
// const contactForm = document.getElementById('contact-form');
// const errorElement = document.getElementById('error');
// const successMsg = document.getElementById('success-msg');
// const submitBtn = document.getElementById('submit');
  
// const validate = (e) => {
//   e.preventDefault();
 
//   if (name.value.length < 3) {
//     errorElement.innerHTML = 'Your name should be at least 3 characters long.';
//     return false;
//   } 
  
//   if (!(email.value.includes('.') && (email.value.includes('@')))) {
//     errorElement.innerHTML = 'Please enter a valid email address.';
//     return false;
//   } 

//   if (!emailIsValid(email.value)) {
//     errorElement.innerHTML = 'Please enter a valid email address.';
//     return false;
//   }

//   if (message.value.length < 15) {
//     errorElement.innerHTML = 'Please write a longer message.';
//     return false;
//   }

//   errorElement.innerHTML = '';
//   successMsg.innerHTML = 'Thank you! I will get back to you as soon as possible.'; 

//   e.preventDefault();
//   setTimeout(function () {
//     successMsg.innerHTML = '';
//     document.getElementById('contact-form').reset();
//   }, 6000);

//   return true;

// }

// const emailIsValid = email => {
//   return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
// }

// submitBtn.addEventListener('click', validate);


function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
		json = JSON.parse(this.response); // Ебанный internet explorer 11
    	console.log(json);
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		alert("Сообщение отправлено");
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка. Сообщение не отправлено");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
