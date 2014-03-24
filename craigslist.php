
<link href="./style.css" rel="stylesheet">
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<?php  



$city=$_POST['city'];
$sal=$_POST['sal'];
$chicago = 1.169;
$newyork = 2.167;
$adj;
$sug;
$rate =.3;
$months=12;
//percentage of salary being earned 


//calculations for statistics
//this will soon be replaced with database code
if ($city == "Chicago"){
	$adj = round(($sal / $chicago),2);
	$sug= ($sal * $rate) / $months;	
	$per = floor(($adj / $sal) * 100);
	$cost = (100-$per);
	$cost = round((($cost/100) *($adj/12)),2);
	
	}
	else {
	$adj = round(($sal / $newyork),2);
	$sug= ($sal * $rate) / $months;
	$per = floor(($adj / $sal) * 100);
	$cost = (100 - $per);
	$cost = round((($cost/100) *($adj/12)),2);
	}
	
	
	?>
	<div class ="main">
	<h2 class="basic">Your adjusted salary in <?php echo $city; ?> is: <div class="green">[$<?php echo $adj; ?>]</div></h2>
	
	
	<h2 class="script">That is <div class="font"> </br> <?php echo $per; ?>%</div> 

	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<div style="padding-left:300px;">of your total salary.</div></h2>
	</br>
	</br>
	</br>
	<div class="nim"> You're paying $<?php echo $cost; ?> per </br>
	month to live in  <?php echo $city; ?>.</div>
	</br>
	</br>
	</br>
	
	<h2 class="logo">   <div class="rentBig">$<?php echo $sug; ?></div> </h2>
	<h2> <div class="rentSmall" > Suggested rent  budget. </div>
	</br>
	
	<h2 class="listings"> Current listings in <?php echo $city; ?> within your price range:  </h2>
	</div>
	
