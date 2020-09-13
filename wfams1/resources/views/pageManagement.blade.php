<!DOCTYPE html>
<html>
<head>
<title>Page Management</title>
</head>
<body>

<h1>Welcome to Page Management</h1>
<a href="{{url('createPage')}}" class="btn btn-primary">Add Page</a>
<table style="width:100%">
  <tr>
    <th>Title</th>
    <th>URI</th>
    <th></th>
    <th></th>
  </tr>
@foreach($pages as $page)
<tr>
    <td><a href="/page/{{ $page->URI }}">{{$page->title}}</a></td>
    <td><a href="/page/{{ $page->URI }}">{{$page->URI}}</td>
    <td><a href="/page/{{ $page->URI }}/edit">Modify</a></td>
    <td><form action="/page/{{ $page->URI }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
</html>
