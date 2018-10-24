
<?php
 include (ROOT.'/views/layout/header.php');
?>



<body>

    <div class="container"><!-- Блок контейнер ----------------------------------------------------------------------->
	  <div class="row">
			<div class="col">
			</div>
			
			<div class="col-7">
			    <!--
				<div class="alert alert-success" role="alert">
						<h4>Данные успешно добавлены !</h4>
				</div>-->
				
				
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">ENG</th>
							<th scope="col">RUS</th>
							<th scope="col">Username</th>
						</tr>
					</thead>
					<tbody>
					    <?php foreach($wordsList as $words) : ?>
						<tr>
							<th scope="row"><?=$words['id'];?></th>
							<td><?=$words['enwd'];?></td>
							<td><?=$words['ruwd'];?></td>
							<td>@mdo</td>
						</tr>
						<?php endforeach; ?>
					
					</tbody>
				</table>
				
				
				
				
			</div>
			
			<div class="col">
			</div>
	  </div>
	</div>
	<!------------------------- Конец блока контейнера ----------------------------------------------------------------->

	
<?php 
include (ROOT.'/views/layout/footer.php');
?>