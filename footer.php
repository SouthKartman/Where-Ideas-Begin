<footer>
<!-- <div class="info">
</div> -->



<div class="firstfoot">
<div class="Icons_google">
  <a target="_blank" href= "mailto:hfhdvdffvv@gmail.com?subject=Вопрос по программированию"><img  class="imgfoot" src="img/googgle2.png"  alt=""></a>

<a target="_blank" href= "https://ok.ru/profile/573990177819"><img  class="imgfoot" src="img/1.png" alt=""></a>
<a  target="_blank" href= "https://www.youtube.com/channel/UCap-3QH-gZjgHSBnqzzswDA/featured"><img  class="imgfoot" src="img/4-48992_youtube-square-icon-png-transparent-png.png" alt=""></a>

<a  target="_blank" href= "https://twitter.com/i/flow/single_sign_on"><img  class="imgfoot" src="img/computer-icons-twitter-removebg-preview.png" alt=""></a>
<a target="_blank" href= "https://instagram.com/non_fixed?utm_medium=copy_link"><img class="imgfoot" src="img/IG.jpg"  alt=""></a>
<a target="_blank" href= "https://windscribe.com/download"><img class="imgfoot" src="img/f8a15c863703f222615ecdb690a7315d0e80ca8f7d6bf0985d924f75a86db5d7_100.png"  alt=""></a>
<a  target="_blank" href= "https://vk.com/fresh_player"><img class="imgfoot" src="img/i (4).png"  alt=""></a> 
</div>
</div>
<div class="secondfoot">
  <div class="textfoot">
    <h1>© 2022, Social_Beach</h1>
</div></div>












<script src="js/form.js">
  
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

</script>
</footer>