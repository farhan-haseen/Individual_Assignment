<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<h1>Searching Page</h1>
	<a href="/cust_home">Back</a>
	<br>
	<br>
	<form action="/Search_con" method="post">
		{{csrf_field()}}
		<input type="text" placeholder="Search..." name="sc" class="s1">
		<select name="type" class="s1">
			<option>Book name</option>
			<option>Author name</option>
			<option>Category</option>
		</select>
		<br>
		<br>
		<input type="submit" value="Go!" class="s1">
	</form>
	
	

</body>
</html>
