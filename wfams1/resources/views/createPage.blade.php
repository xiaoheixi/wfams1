<!DOCTYPE html>
<html>
<head>
<title>Add a Page!</title>
</head>
<body>

<h1>Fill in the form to add a page below.</h1>
<form action="/storePage" method="post">
@csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" autocomplete="off" value="{{ old('title') }}"><br>
  @error('title') <p style="color: red">{{ $message }}</p> @enderror
  <label for="URI">URI:</label><br>
  <input type="text" id="URI" name="URI" autocomplete="off" value="{{ old('URI') }}"><br>
  @error('URI') <p style="color: red">{{ $message }}</p> @enderror
  <label for="pageContent">Page Content:</label><br>
  <textarea id="pageContent" name="pageContent" value="{{ old('pageContent') }}"></textarea>
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