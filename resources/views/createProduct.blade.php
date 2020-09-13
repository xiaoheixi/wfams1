<!DOCTYPE html>
<html>
<head>
<title>Add a Product!</title>
</head>
<body>

<h1>Fill in the form to add a product below.</h1>
<form action="/storeProduct" method="post">
@csrf
  <label for="productName">Product Name:</label><br>
  <input type="text" id="productName" name="productName" autocomplete="off" value="{{ old('productName') }}"><br>
  @error('productName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productImage">Product Image:</label><br>
  <input type="file" id="productImage" name="productImage" autocomplete="off" value="{{ old('productImage') }}"><br>
  @error('productImage') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productLink">Product Link:</label><br>
  <input type="text" id="productLink" name="productLink" autocomplete="off" value="{{ old('productLink') }}"><br>
  @error('productLink') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productPrice">Product Price:</label><br>
  <input type="decimal" id="productPrice" name="productPrice" autocomplete="off" value="{{ old('productPrice') }}"><br>
  @error('productPrice') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>