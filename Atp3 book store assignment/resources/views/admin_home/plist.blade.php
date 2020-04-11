<!DOCTYPE html>
<html>
<head>
	<title>Purchase list</title>
</head>
<body>
	<h1>All User Purchase List</h1>

	<a href="/admin_home">Back</a>
	<br>
	<br>

		<table border="2px">
			<tr>
				<th>Purchase ID</th>
				<th>Username</th>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Price</th>
				<th>Payment Type</th>
				<th>Date</th>
				
			</tr>
	
		@foreach($list as $userInfo)

			<tr>
				<td>{{$userInfo['id']}}</td>
				<td>{{$userInfo['username']}}</td>
				<td>{{$userInfo['bookId']}}</td>
				<td>{{$userInfo['bookName']}}</td>
				<td>{{$userInfo['price']}}</td>
				<td>{{$userInfo['paytype']}}</td>
				<td>{{$userInfo['purDate']}}</td>
			</tr>

		@endforeach

		</table>

</body>
</html>
