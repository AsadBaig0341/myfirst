<doctype html!>
<html>
<head>

<title> Html or Css ka asign 2 </title>
</head>

<body>
<?php 
echo "first heruko app";
?> 
<h1> User Registration Form</h1>
<div>
<form action="http://example.com/upload.php" method="post">
<p> User Name:
<input type="text" name="user name"/>
</p>
<p>Password :
<input type="password" name="password dal" required="required"/> </p>
<p> date of birth: <input type="date" name="tarikh" placeholder="dd/mm/yyyy" size="45" length="45"></p>
<p> Web url:<input type="url" name="email" /></p>
<p> Address: <input type="text" name="address"></p>
<p> City:<select name="City" name="city"> 
<option value="toronto">Toronto</option>
<option value="karachi">karachi</option>
<option value="dehli">dehli</option>

</select>
</p>
<p> State:
<input type="text" name="state"/>
</p>
<p> Zip:
<input type="text" name="zip"/>
</p>
<p> magazines:
<select name="Magazine:" size="4" multiple="multiple" >
<option value="jang">Jang</option>
<option value="express">Express</option>
<option value="ummat">Ummat</option>
<option value="toronto">Toronto</option>
</select>
<p>Additonal comments: </p>
<textarea name="comments" cols="30" rows="20" > </textarea>
<p>Upload your profile picture:</p> <input type="file" name="my-pics" >
<input type="submit" value="upload"> 
<p> <input type="submit" value="send your order"> </p>
</form>
</div>
</body>
</html>