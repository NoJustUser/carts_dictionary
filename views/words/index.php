
<?php
 include (ROOT.'/views/layout/header.php');
  if (empty($_POST)) {
     $en = '';
     $rus = '';
  }
?>

	
  <div class="container"><!---- Блок контейнер. Содержит три блока: ---------------------------------------------> 
                               <!-- Первый блок содержит форму для занесения новых слов в базу данных
								 -- Второй блок содержит форму проверки введенных пользователем слов
							     -- на правильность, и ведет анализ результатов теста. -------------------------->
  
      <div class="row">
	  
	        <div class="col">
			</div>
	        
			<div class="col-7">
				<div class="alert alert-primary" role="alert">
					<h4>Форма для записи данных в базу</h4>
							
					<form action="/dictionary/add/<?=$en?>/<?=$rus?>" method='post'>
					
						<div class="form-row">
						
						    <div class="col-md-7 mb-3">
								<label for="validationServerUsername">Введите слово (ENG):</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroupPrepend3">ENG</span>
									</div>
									<input type="text" class="form-control is-invalid" name="add_en" id="validationServerUsername"
									placeholder="example" aria-describedby="inputGroupPrepend3" required>
									<div class="invalid-feedback">
										Введите слово и транскрипцию.
									</div>
								</div>
							</div>
						
							<div class="col-md-5 mb-3">
								<label for="validationServer01">Перевод (RUS):</label>
								<input type="text" class="form-control is-valid" id="validationServer01" name="add_ru"
								placeholder="translation" required>
								<div class="valid-feedback">
									 Смотрится красиво!
								</div>
							</div>
						
						</div>
						<?php 
						    if (!empty($_POST['add_en']) && isset($_POST['add'])) {
								$en = $_POST['add_en'];
								$rus = $_POST['add_ru'];
							}
						?>
                        <button class="btn btn-primary" type="submit" name="add">Внести данные</button>
			
                    </form>
							
				</div>
			</div>
			
			<div class="col">
			</div>
			
      </div>
	        <!-- Блок контейнер if добавляется в том случае, ----------------------------------------------------> 
			<!-- если данные успешно загружены в базу ----------------------------------------------------------->
			<?php if (!empty($_POST['add_en']) && isset($_POST['add'])): ?>
					<div class="row">
						<div class="col">
						</div>
						<div class="col-7">
							<div class="<?php if ($bool) { echo 'alert alert-success'; }
							                  else {echo 'alert alert-warning';} ?>" role="alert">
							<h4><?php if ($bool) { echo "Данные успешно добавлены !";} 
							          else {echo "Введенные данные уже существуют !";}?></h4>
							</div>
						</div>
			
						<div class="col">
						</div>
					</div>
					<META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/dictionary/">
            <!-- Конец блока контейнера if ---------------------------------------------------------------------->
			<?php endif; ?>
	   
  </div>
  <!--------------------------- Конец блока контейнера ---------------------------------------------------------->
	
	
	
<?php include (ROOT.'/views/layout/footer.php');