
<div>
	<div>	
		<form method="post">
			<input type="hidden" name="barcodeText" id="" value="<?php $barnum1 = rand(1234, 99999); $barnum2 = rand(111111, 999999);echo $barnum1.''.$barnum2;?>">
			<input type="hidden" name="barcodeType" id="" value="code128">
			<input type="hidden" name="barcodeDisplay" id="" value="horizontal">
				
			<input type="hidden" name="barcodeSize" id="barcodeSize" value="20">
			<input type="hidden" name="printText" id="printText" value="true">	
			<input type="submit" name="generateBarcode" class="btn btn-outline-dark" value="Получить штрихкод заказа">
		</form>

		<div>
		 <?php	 
			if(isset($_POST['generateBarcode'])) {
				$barcodeText = trim($_POST['barcodeText']);
				$barcodeType=$_POST['barcodeType'];
				$barcodeDisplay=$_POST['barcodeDisplay'];
				$barcodeSize=$_POST['barcodeSize'];
				$printText=$_POST['printText'];
				
				$printAuthor=$onesingle["author"];
					
				echo '<img class="imgbarcode" alt="'.$barcodeText.'" src="barcode/barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
			}
		?>
		</div>
	</div>		
</div>
