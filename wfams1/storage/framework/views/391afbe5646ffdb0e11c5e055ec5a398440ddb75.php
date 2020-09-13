<!DOCTYPE html>
<html>
<head>
<title>Edit a Page!</title>
</head>
<body>

<h1>Fill in the form to edit a page below.</h1>
<form action="/page/<?php echo e($pageContent->URI); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" autocomplete="off" value="<?php echo e($pageContent -> title); ?>"><br>
  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <label for="URI">URI:</label><br>
  <input type="text" id="URI" name="URI" autocomplete="off" value="<?php echo e($pageContent -> URI); ?>"><br>
  <?php $__errorArgs = ['URI'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <label for="pageContent">Page Content:</label><br>
  <textarea id="pageContent" name="pageContent" value="<?php echo e($pageContent -> pageContent); ?>"></textarea>
  <?php $__errorArgs = ['pageContent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <input type="submit" value="Submit">
</form>
<script src="https://cdn.tiny.cloud/1/z3c5oj4u7s8ido8ma9c2wokkvw238dkqly5dlkpcy9m7gndn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector:'#pageContent'
    })
</script>
</body>
</html><?php /**PATH C:\PX\htdocs\wfams1\wfams1\resources\views/editPage.blade.php ENDPATH**/ ?>