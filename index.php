<html>
<title>Simple Burndown Chart Generator</title>
<body>
<h2>Simple Burndown Chart Generator</h2><br>
<form action="generate.php" method="post" enctype="multipart/form-data">
Title: <input type="text" name="title"><br>
Work days:
<select name="days">
<option value="" selected="selected"> </option>
<?php
for ($i=1; $i<=30; $i++)
{
?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select><br>
Start date: <input type="text" name="date">
e.g
<?php
echo date('Y-m-d');
?><br>
Hours:
<select name="hours">
<option value="" selected="selected"> </option>
<?php
for ($i=1; $i<=1000; $i++)
{
?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select><br>
Show weekends/holidays: <input type="radio" name="we" value="yes">Yes <input type="radio" name="we" value="no">No<br><br>
Config file:<br>
<input type="file" name="file" id="file"><br><br>
<input type="submit" name="chart_button" value="Generate chart">
<input type="submit" name="config_button" value="Generate config file">
</form>
<br><br><br>
<code>
Simple howto:<br><br>
There are two ways of using Simple Burndown Chart Generator.<br><br>
1. If just a simple burndown chart with "Ideal" line is needed, just enter values and push "Generate chart" button<br><br>
2. If an "Actual" line is needed:<br>
<ul>
<li> Enter starting values
<li> Push "Generate config file"
<li> Edit config file with "Actual" values
<li> Each time you want to generate a new chart, just select your config file and push "Generate chart" button
</ul>
<br><br>
Get the source code <a href="https://github.com/airikka/sbcg">here</a>
</code>
</body>
</html>
