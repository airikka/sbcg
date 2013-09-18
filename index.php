<html>
<title>Simpel Burndown Graph Generator</title>
<body>
<h2>Simpel Burndown Graph Generator</h2><br>
<form action="generate.php" method="post" enctype="multipart/form-data">
Title: <input type="text" name="title"><br>
Work days: <input type="text" name="days"><br>
Start date: <input type="text" name="date"><br>
Hours: <input type="text" name="hours"><br>
Show weekends/holidays: <input type="radio" name="we" value="yes" checked>Yes <input type="radio" name="we" value="no">No<br><br>
Config file:<br>
<input type="file" name="file" id="file"><br><br>
<input type="submit" name="graph_button" value="Generate graph">
<input type="submit" name="config_button" value="Generate config file">
</form>
<br><br><br><br>
Get the source code <a href="https://github.com/airikka/sbgg">here</a>
</body>
</html>
