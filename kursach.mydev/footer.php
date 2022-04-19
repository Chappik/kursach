	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<footer>
		<style>
			#bgmodal {
				display: none; /* Не отображать */
				position: fixed; /* Зафиксировать */
				z-index: 99998;
				top:0;  
				left: 0;
				background-color: rgba(128,128,128, 0.7); /* серый. прозрачный фон */
				height: 100%; /* высота 100% экрана */
				width: 100%; /* ширина 100% экрана */
			}
			#modal {
				position: relative;
				width: 50%;
				height: 50%;
				top:25%;
				left:25%;
				background-color: #fff;
				z-index: 99999;
			}
		</style>

			<div class="in_foter">
				<span>© 2023 СЧАСТЬЕ ЕСТЬ. Сайт создан <a>Chappik</a></span>
			</div>

			<button id="open">Добавить товар</button>
				<div id="bgmodal">
						<div id="modal">
							<h1>Введите информацию о товаре</h1>
									<input autocomplete="none" type = "text" placeholder = "Имя" name = "firstName"  class="picc" required> <!-- поле обязательно к заполнению -->
									<input autocomplete="none" type = "text" placeholder = "Фамилия" name = "lastName"  class="namee" required>
									<input autocomplete="none" type = "text" placeholder = "Фамилия1" name = "lastNamee"  class="pricee" required> <!-- поле обязательно к заполнению -->
									<button type = "submit" id="submitt" class="dobav">Add</button>
									<script>
										$(document).ready(function(){
											$('button.dobav').on('click',function(){
												var pick = $('input.picc').val();
												var name = $('input.namee').val();
												var price = $('input.pricee').val();

												$.ajax({
												  method: "POST",
												  url: "indexx.php",
												  data: { $firstName: pick, $lastName: name, $lastNamee: price }
												})
												  .done(function(msg) {
												   alert( "Внимание: " + msg );
												  });

											})
										});

												
											
									</script>
									
									<button id="close">Закрыть окно</button>
								
							
						</div>
					<script type="text/javascript" src="js/modal.js"></script>
				</div>
</footer>