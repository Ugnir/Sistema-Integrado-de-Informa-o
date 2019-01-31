<?php 

include 'codeupload.php'

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>

<body>
  <form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
      <label for="exampleInputFile">Status Upload</label>
      <input type="file" name="file" id="file" size="150">
      <p class="help-block">Only Excel(CSV) File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="upload" value="upload">Atualizar Status!</button>
  </form>	
</body>
</html>

