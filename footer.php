<footer class="footer" role="contentinfo">
<div class="container">
  <div class="row">
	<div class="col-sm-6">
		<p class="mb-1">		  
			<span class="">
				<!-- стандартная дата: < ? php echo date("j F Y"); ? >-->
				<?php
					require 'vendor/autoload.php';
					use Carbon\Carbon;

					echo Carbon::now()->locale('ru_RU')->isoFormat('ll');	//15 апр 2021 г.	

					$dt = Carbon::now();
					echo " <small> сегодня ";
					echo $dt->locale('ru')->dayName; 
					echo ".</small>";			
					//echo "сегодня: ";
					//echo $dt->day; 
					//echo $dt->locale('ru')->monthName;     
					//echo $dt->year;  
				?>
			</span>
		</p>
	  <div class="credits">
        freelance marketplace
	  </div>
	  <div class="credits">
        <?php require_once "mono_log.php";?>
	  </div>
	</div>
	<div class="col-sm-6 social text-md-right">
	  <a href="#"><span class="icofont-twitter"></span></a>
	  <a href="#"><span class="icofont-facebook"></span></a>
	  <a href="#"><span class="icofont-linkedin"></span></a>
	  <a href="#"><span class="icofont-instagram"></span></a>
	</div>
  </div>
</div>

</footer>
