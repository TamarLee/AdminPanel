

<form action="{{ url('/admin/products') }}" method="post">
	{{ csrf_field() }}
	<div>
		<p>name</p>
		<div>
			<input type="text" name="name" id="name">
			
		</div>
	</div>

	<div>
		<p>description</p>
		<div>
			<textarea name="description"></textarea>
			
			</div>
	</div>
	<br>

	<button>add products</button>
	
</form>