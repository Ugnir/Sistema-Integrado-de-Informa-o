<?php 

include 'upload_csv_to_previa.php'

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>

<body>
   <form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
      <label for="exampleInputFile">Atualizar Previa</label>
      <input type="file" name="file" id="file" size="150">
      <p class="help-block">Only CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
  </form>
</body>
</html>

