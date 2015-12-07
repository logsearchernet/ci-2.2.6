<div class="body">

<form action="/ci-2.2.6/product/product_new" method="post" novalidate="novalidate">

	<header>
	<div>
            <a class="left" href="/ci-2.2.6/dashboard"><i class="fa fa-chevron-left"></i> Back</a>
		<button class="right" type="submit">Submit</button>
	</div>
	</header>


	<div class="product-form">

		<label>Title *</label>
		<input type="text" name="name" class="required" aria-required="true">

		<div class="prices">
			<div class="price">
				<label class="currency">MYR</label>
				<label>Price *</label>
				<input type="number" name="price" class="required" aria-required="true">
			</div>
			<div class="shipping-fee">
				<label class="currency">MYR</label>
				<label>Shipping Fee *</label>
				<input type="number" name="shipping_fee" class="required" aria-required="true">
			</div>
		</div>


		<label>Description</label>
		<textarea name="description" placeholder="Write something about your item..."></textarea>

		<div class="photos">

			<ul class="photos">
			
			</ul>

			<span class="photo-upload"><i class="fa fa-camera fa-2x"></i></span>
			<span class="text">Take or Upload Photo</span>
			<input name="photo" type="file" accept="image/*">

		</div>

	</div>

</form>
</div>