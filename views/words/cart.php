<?php
 include (ROOT.'/views/layout/header.php');
?>


<div class="container">
 <div class="row">
    <div class="col">
	</div>
	
	<div class="col-7" id="wrap">
	 <div class="card">
       <div class="form-control front" id="exampleFormControlTextarea1"><?=$wordsItem['enwd']; ?></div>
       <div class="form-control back" id="exampleFormControlTextarea2"><?=$wordsItem['ruwd']; ?></div>
     </div> 
	</div>
	
	<div class="col">
	</div>
 </div>
 <div class="row">
 
	<div class="col">
	</div>
	
	<div class="col-7">
		<div class="alert alert-light">
		
		<form action="/dictionary/cart">
			<button class="btn btn-success" type="submit" name="">следующая карта (F5)</button>
        </form>
		</div>
	</div>
	
	<div class="col">
	</div>
 
 </div>
</div>

<?php 
include (ROOT.'/views/layout/footer.php');
?>