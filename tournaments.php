<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BOOTCAMP - Игровой клуб</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/ajaxupload.3.5.js"></script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="https://medv3dko.xyz/"><img src="img/boot.png">&nbsp;BOOT<span class="redt">CAMP</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			<li class="nav-item"><a href="https://medv3dko.xyz/" class="nav-link"><span>ГЛАВНАЯ</span></a></li>
	          <li class="nav-item"><a href="https://medv3dko.xyz/#about-section" class="nav-link"><span>О НАС</span></a></li>
	          <li class="nav-item"><a href="https://medv3dko.xyz/#price-section" class="nav-link"><span>НАШИ ЦЕНЫ</span></a></li>
	          <li class="nav-item"><a href="bron.php" class="nav-link"><span>БРОНИРОВАНИЕ</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>КОНТАКТЫ</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	<section class="ftco-section" id="bron-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Турниры</h1>
            <h2 class="mb-4">Здесь вы можете записаться на актуальные турниры</h2>
<div style="padding: 60px;" class="container">
<?php
require_once "lib/conn.php";
  $sql = mysqli_query($link1, 'SELECT `ID`, `Name`, `Date`, `Payment`, `discp`, `formatpl`, `regl` FROM `ts_tour`'); // data-toggle="modal" data-target="#exampleModalCentered" data-dismiss='modal'
  if (mysqli_num_rows ($sql) == 0) {
	  echo "<h1 class='mb-4 redt list-group-item-warning'>Сейчас турниров не проводится</h1>";
  } else {
  while ($result = mysqli_fetch_array($sql)) {
    echo "<div class='card'>
  <h3 class='card-header redt'>{$result['Name']}</h3>
  <div class='card-body'>
    <h4 class='card-title'>Дата проведения - {$result['Date']}</h4> 
    <p class='card-text'>Дисциплина: <b>{$result['discp']}</b></p>
    <p class='card-text'>Формат: <b>{$result['formatpl']}</b></p>
	<div class='d-flex justify-content-center'><div class='p-2'><form method='POST action='get-tour.php' class='formx'><input type='hidden' name='id' value='{$result['ID']}'>
    <input type='submit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal3' value='Записаться'></form></div> <div class='p-2'><a href='https://medv3dko.xyz/lib/{$result['regl']}' class='btn btn-warning'>Cкачать регламент</a></div></div>
  </div>
  <div class='text-black-50 text-right' style='font-size: small;'><span class='redt'>*прежде чем записываться обязательно прочитайте регламент!</span></div>
</div>";
$idt = $result['ID'];
  }
  }
?>
					  </div>
					  </div>
					  </div>
    </section>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Наши контакты</h1>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Наши адреса:</h3>
		            <p>Пермский край, г.Чайковский, ул. Ленина, 70</p>
					<p>Удмуртская республика, г.Воткинск, ул. 1 Мая, 87</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Контактный номер</h3>
		            <p><a href="tel://1234567920">+7 (958) 243-51-31</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-vk"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Наша группа VK</h3>
		            <p><a href="https://vk.com/bootcampgame" target="_blank">@bootcampgame</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-instagram"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Наш Instagram</h3>
		            <p><a href="https://www.instagram.com/bootcampgame/" target="_blank">@bootcampgame</a></p>
	            </div>
	          </div>
          </div>
        </div>
		</div>
    </section>
		
  <footer id="sticky-footer" class="py-2 bg-white text-dark-80">
    <div class="container text-center">
      <small>Copyright &copy; BOOT<span class="redt">CAMP</span></small>
    </div>
  </footer>
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label"><span class="redt">Запись на турнир</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	        <div class='modal-body'>
      <div class='results'></div>		      	
	  <form method='POST' action='../lib/totour.php' name='formew' id='formew' enctype='multipart/form-data'>
							  <div class='form-group'>
							    <label for='labelEmail'>Название команды:</label>
							    <input type='text' class='form-control' name='team_name' placeholder='Любое' required>
							  </div>
							  <div class='form-group'>
							    <label for='labelText'>Контактный телефон командира:</label>
							    <input type='text' class="form-control" name='phone_main' id='phone'  placeholder='+7 9XX XXX-XX-XX' required>
							  </div>						  
							  <input type='hidden' name='tour_id' id='tour_id' value=''>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Закрыть</button>
        <button type='submit' class='btn btn-primary' id="eee" data-toggle="modal" data-target="#exampleModalCentered" data-dismiss='modal'>Далее</button>                         
		</form>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel">Список игроков</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method='POST' action='javascript:void(null);' onsubmit='www()' id='www'>
	  <div id="info"></div>
							  <div class='form-group'>
							    <label for='labelPhone'>Ниже впишите данные игроков вашей команды:</label>
								<div class='row'>
								<div class='col-1'>1:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='plmain'  placeholder='playername (Командир)' size='5' required>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vkmain' id='vk'  placeholder='VK Profile (Командир)' size='5' required>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>2:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl2'  placeholder='playername' size='5' required>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk2'  placeholder='VK Profile' size='5' required>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>3:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl3'  placeholder='playername' size='5' required>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk3'  placeholder='VK Profile' size='5' required>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>4:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl4'  placeholder='playername' size='5' required>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk4'  placeholder='VK Profile' size='5' required>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'>5:</div>
                                <input type='text' class='form-control w-25 p-3 col' name='pl5'  placeholder='playername' size='5' required>
								<div class='col-1'>&ndash;</div>
								<input type='text' class='form-control w-25 p-3 col' name='vk5'  placeholder='VK Profile' size='5' required>
								<div class='col-1'></div>
								<div class='w-100'></div>
								<div class='col-1'></div>
								</div>
							  </div>
							  <div class='form-group'>
							  <label>Выбрать конфиги: <input type="file" name="cfg" id="cfg" required /></label>
							  </div>
  <div class='text-black-50 text-right' style='font-size: small;'><span class='redt'>Конфиги должны быть упакованы в zip или rar архив, а также заранее подписаны!</span></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Отказаться</button>
        <button type="submit" class="btn btn-secondary">Записаться</button>
      </div>
	  </form>
    </div>
  </div>
</div>
</div>
<div id="succes" class="white-popup mfp-hide">
<p><div class="alert alert-success text-center" role="alert">Ваша заявка успешно отправлена на проверку! <p>Когда она пройдёт проверку мы оповестим командира в VK.</p> <div class="font-weight-bolder"><p>Спасибо!</p></div></div></p>
</div>
</div>
</div>
</div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
    		<script language="JavaScript" type="text/javascript">
  $.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};
	</script>
  		<script language="JavaScript" type="text/javascript">
$("#phone").click(function(){
  $(this).setCursorPosition(3);
}).mask("+7(999) 999-9999");
	</script>
  		<script language="JavaScript" type="text/javascript">
$("#vk").click(function(){
}).mask("vk.com/*");
	</script>
	<script type="text/javascript">
$('#eee').click(function(){
    $.post(
        'lib/totour.php', // адрес обработчика
         $("#formew").serialize(), // отправляемые данные       

        function(msg) { // получен ответ сервера  
            $('#my_form').hide('slow');
            $('#my_message').html(msg);
        }		 
    );
});
</script>
	<script type="text/javascript">
	function www() {
	var msg   = $('#www').serialize();
    $.ajax({
      method: "POST",
      url: "lib/totourpl.php",
      cache: false,
	  timeout:3000,
      data: msg,
			success: function(data) { 
			$(".modal").modal("hide");
			$.magnificPopup.open({
  items: {
    src: '#succes',
    type: 'inline'
  }
}); 
			},
			// Функция срабатывает в период ожидания данных
			beforeSend: function(data) { 
				$('#info').html('<p><div class="spinner-grow text-danger" role="status"></div> Отправляем заявку...</p>');
			},
			 // Тип данных
			dataType:"html",
			 // Функция сработает в случае ошибки
			error:  function(data){
				$('#info').html('');
				}
			});
		}
</script>
	<script type="text/javascript" src="js/jquery.ajaxfileupload.js"></script>
<script type="text/javascript">

		$(document).ready(function() {
			var interval;

			function applyAjaxFileUpload(element) {
				$(element).AjaxFileUpload({
					action: "lib/upload.php",
					onChange: function(filename) {
						// Create a span element to notify the user of an upload in progress
						var $span = $("<span />")
							.attr("class", $(this).attr("id"))
							.text("Загрузка")
							.insertAfter($(this));

						$(this).remove();

						interval = window.setInterval(function() {
							var text = $span.text();
							if (text.length < 13) {
								$span.text(text + ".");
							} else {
								$span.text("Загрузка");
							}
						}, 200);
					},
					onSubmit: function(filename) {
						// Return false here to cancel the upload
						/*var $fileInput = $("<input />")
							.attr({
								type: "file",
								name: $(this).attr("name"),
								id: $(this).attr("id")
							});

						$("span." + $(this).attr("id")).replaceWith($fileInput);

						applyAjaxFileUpload($fileInput);

						return false;*/

						// Return key-value pair to be sent along with the file
						return true;
					},
					onComplete: function(filename, response) {
						window.clearInterval(interval);
						var $span = $("span." + $(this).attr("id")).text(filename + " "),
							$fileInput = $("<input />")
								.attr({
									type: "file",
									name: $(this).attr("name"),
									id: $(this).attr("id")
								});

						if (typeof(response.error) === "string") {
							$span.replaceWith($fileInput);

							applyAjaxFileUpload($fileInput);

							alert(response.error);

							return;
						}

						$("<a />")
							.attr("href", "#")
							.text("x")
							.bind("click", function(e) {
								$span.replaceWith($fileInput);

								applyAjaxFileUpload($fileInput);
							})
							.appendTo($span);
					}
				});
			}

			applyAjaxFileUpload("#cfg");
		});
	</script>
		   <script type="text/javascript">
   $(".formx").submit(function(e) {
        var form = $(this);
        var url = form.attr('action');
        e.preventDefault(); 
         $.ajax({
         type: "POST",
         url: "get-tour.php",
         data: form.serialize(), // serializes the form's elements.
			success: function(data) {
				// Отображаем данные в форме
				$('.results').html(data); 				
			},
			// Функция срабатывает в период ожидания данных
			beforeSend: function(data) { 
				$('.results').html('<p>Ожидание данных...</p>');
			},
			 // Тип данных
			 // Функция сработает в случае ошибки
			error:  function(data){
				$('.results').html('<p>Возникла неизвестная ошибка. Пожалуйста, попробуйте чуть позже...</p>');
				}
			});
			});
    </script>
		   <script type="text/javascript">
   $(".formx").submit(function(e) {
        var form = $(this);
        var url = form.attr('action');
        e.preventDefault(); 
         $.ajax({
         type: "POST",
         url: "get-id.php",
         data: form.serialize(), // serializes the form's elements.
			success: function(data) {
				// Отображаем данные в форме
				$('#tour_id').val(data); 				
			},
			});
			});
	</script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  </body>
</html>