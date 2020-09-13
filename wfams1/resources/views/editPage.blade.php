<!DOCTYPE html>
<html>
<head>
<title>Edit a Page!</title>
</head>
<body>

<h1>Fill in the form to edit a page below.</h1>
<form action="/page/{{ $pageContent->URI }}" method="post">
@csrf
@method('PATCH')
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" autocomplete="off" value="{{ $pageContent -> title }}"><br>
  @error('title') <p style="color: red">{{ $message }}</p> @enderror
  <label for="URI">URI:</label><br>
  <input type="text" id="URI" name="URI" autocomplete="off" value="{{ $pageContent -> URI }}"><br>
  @error('URI') <p style="color: red">{{ $message }}</p> @enderror
  <label for="pageContent">Page Content:</label><br>
  <textarea id="pageContent" name="pageContent" value="{{ $pageContent -> pageContent }}"></textarea>
  @error('pageContent') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
<script src="https://cdn.tiny.cloud/1/z3c5oj4u7s8ido8ma9c2wokkvw238dkqly5dlkpcy9m7gndn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector:'#pageContent'
    })
</script>
</body>
</html>