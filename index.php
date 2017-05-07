<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple QR Code generator">
    <meta name="author" content="Dawid Górecki">

    <title>Simple QR Code generator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      body { padding: 20px; background: #fff; }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <h3 class="text-center">Simple QR Code generator</h3><br><br>
      </div> 
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="qrcode.php" method="post">
            <div class="form-group">
              <label for="text">QR Code Value</label>
              <input type="text" class="form-control" name="text" id="text" required>
            </div>
            <div class="form-group">
              <label for="size">Size</label>
              <input type="text" class="form-control" name="size" id="size">
            </div>
            <div class="form-group">
              <label for="padding">Padding</label>
              <input type="text" class="form-control" name="padding" id="padding">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Create QR Code</button>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </body>
</html>
