<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<style>
		.c1
		{
			border: 2px solid black;
			width: 35%;
			padding: 7px;
			margin: 10px 0px 0 70px;
			display: inline-block;
		}
		.c1 form
		{
			display: inline-block;
		}
	</style>

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

	<hr>
	<hr>
	
	@foreach($b_list as $book)
	<div class="c1">
		Name: {{ $book['bookName'] }} <br>
		Price: {{ $book['price'] }} <br>
		Author: {{ $book['authorName'] }} <br>
		Category: {{ $book['category'] }} <br>
		<form action="/view" method="post">
			{{csrf_field()}}
			<button type="submit" name="viewBtn" value="{{ $book['id'] }}">
				View
			</button>
		</form>
		<form action="/addtocart" method="post">
			{{csrf_field()}}
			<button type="submit" name="cartBtn" value="{{ $book['id'] }}">
				Add to Cart
			</button>
			<input type="hidden" name="searchpage" value="{{ $book['id'] }}">
		</form>
	</div>
	@endforeach
	

</body>
</html>
