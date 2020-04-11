<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
	<style>
		table{
			width: 50%;
		}
		.div1{
			padding: 5px;
		}
		.div1 form{
			display: inline-block;
			margin:5px;
		}
	</style>
</head>
<body>
	<h1>Book Details!</h1>
	<br>
	<a href="/cust_home">Back</a>
	<br>
	<br>

	@foreach($b_list as $book)
	<div class="c1">

		<table>
			<tr>
				<td>Name:</td>
				<td>{{ $book['bookName'] }}</td>
			</tr>
			<tr>
				<td>Price:</td>
				<td>{{ $book['price'] }}</td>
			</tr>
			<tr>
				<td>Category:</td>
				<td>{{ $book['category'] }}</td>
			</tr>
			<tr>
				<td>Book Description:</td>
				<td class="td1">{{ $book['description'] }}</td>
			</tr>
			<tr>
				<td>Author Name:</td>
				<td>{{ $book['authorName'] }}</td>
			</tr>
			<tr>
				<td>Author Background:</td>
				<td class="td1">{{ $book['authorInfo'] }}</td>
			</tr>
		</table>
		
		<div class="div1">
			<form action="/orderNow" method="post">
				{{csrf_field()}}
				<button type="submit" name="orderBtn" value="{{ $book['id'] }}">
					Order this Book
				</button>
				<input type="hidden" name="bn" value="{{ $book['bookName'] }}">
				<input type="hidden" name="bp" value="{{ $book['price'] }}">
			</form>
			<form action="/addtocart" method="post">
				{{csrf_field()}}
				<button type="submit" name="cartBtn" value="{{ $book['id'] }}">
					Add to Cart
				</button>
				<input type="hidden" name="bookpage" value="{{ $book['id'] }}">
			</form>
		</div>
		
	</div>
	@endforeach

</body>
</html>
