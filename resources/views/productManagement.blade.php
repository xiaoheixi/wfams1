<!DOCTYPE html>
<html>
<head>
<title>Product Management</title>
</head>
<body>

<h1>Welcome to Product Management</h1>
<a href="{{url('createProduct')}}" class="btn btn-primary">Add Product</a>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Link</th>
    <th>Price</th>
    <th></th>
    <th></th>
  </tr>
@foreach($products as $product)
<tr>
    <td>{{$product->productName}}</a></td>
    <td><img src="{{ static('images/{{$product->productImage}}')}}" class="img-thumbnail" width="75" />{{$product->productImage}}</td>
    <td>{{$product->productLink}}</td>
    <td>{{$product->productPrice}}</td>
    <td><a href="/product/{{ $product->productName }}/edit">Modify</a></td>
    <td><form action="/product/{{ $product->productName }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
</html>