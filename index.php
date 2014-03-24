<html>
<Title> drewslist: calculate your future </title>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">
    <body  OnLoad="document.myform.target.focus();">
	<div class="side">
	<h1 class="logo"> drewslist</h1>
	</div>
    <div class="main">
	
	<form name="myform" method="post" action="craigslist.php">
    <!-- Enter :  <input type="text" name="target" value="" style="width:350px;"> <br /> -->
	<!-- Select Basic -->



<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sal">Enter Salary</label>
  <div class="controls">
    <input id="sal" name="sal" placeholder="$$" class="input-xlarge" required="" type="text">
    
</div>
</div>



	
<div class="control-group">
  <label class="control-label" for="city">Select City</label>
  <div class="controls">
    <select id="city" name="city" class="input-xlarge">
      <option>Chicago</option>
      <option>New York</option>
    </select>
  </div>
</div>
	
	
	
	
	
    <input type="checkbox" name="desc"> Include Description<br />
    <input type="checkbox" name="narrow" checked="checked"> Multiple words searched literally.<br /><br />
    <input type="submit" name="submit" value="Submit">
    </form>
	</div>
    
	<br /><br />
    </body>
</html>  