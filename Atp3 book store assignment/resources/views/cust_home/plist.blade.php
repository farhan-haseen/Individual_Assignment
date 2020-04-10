<!DOCTYPE html>
<html>
<head>
	<title>Purchase list</title>
</head>
<body>
	<h1>Purchase List</h1>

	<a href="/cust_profile">Back</a>
	<br>
	<br>

		<table border="2px">
			<tr>
				<th>Purchase ID</th>
				<th>Username</th>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Price</th>
				<th>Pay Type</th>
				
			</tr>
	
		@foreach($list as $userInfo)

			<tr>
				<td>{{$userInfo['id']}}</td>
				<td>{{$userInfo['username']}}</td>
				<td>{{$userInfo['bookId']}}</td>
				<td>{{$userInfo['bookName']}}</td>
				<td>{{$userInfo['price']}}</td>
				<td>{{$userInfo['paytype']}}</td>
			</tr>

		@endforeach

		</table>

</body>
</html>
