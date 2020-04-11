<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
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
		.cat
		{
			background-color: black;
			color: gold;
			padding: 5px;
			margin: 10px 0px;
		}
		.cat .a1
		{
			color: red;
			text-decoration: none;
		}
		.cat .a1:hover
		{
			font-weight: bold;
		}
		.menus
		{
			display: inline-block;
			width: 100%;
		}
		.menu1
		{
			display: inline-block;
			text-align: left;
			width: 49%;
		}
		.menu2
		{
			display: inline-block;
			text-align: right;
			width: 50%;
		}
	</style>
</head>
<body>
	<h1>Welcome Customer!</h1>
	<br>
	<div class="menus">
		<div class="menu1">
			<a href="/cust_profile">Check Profile</a> |
			<a href="/cart_payment">Buy Cart Items</a>
		</div>
		<div class="menu2">
			<a href="/Searchpage">Search</a> |
			<a href="/logout">Logout</a>
		</div>
	</div>

	<div class="cat">
	Categories:
	@foreach($cat_list as $categ)
	
	<a class="a1" href="/category/{{ $categ->category }}">{{ $categ->category }}</a> |
	
	@endforeach
	</div>

	@foreach($b_list as $book)
	<div class="c1">
		Name: {{ $book['bookName'] }} <br>
		Price: {{ $book['price'] }} <br>
		Category: {{ $book['category'] }} <br>
		Author Name: {{ $book['authorName'] }} <br><br>
		<form action="/view" method="post">
			{{csrf_field()}}
			<button type="submit" name="viewBtn" value="{{ $book['id'] }}">
				View Details
			</button>
		</form>
		<form action="/addtocart" method="post">
			{{csrf_field()}}
			<button type="submit" name="cartBtn" value="{{ $book['id'] }}">
				Add to Cart
			</button>
		</form>
	</div>
	@endforeach

</body>
</html>
