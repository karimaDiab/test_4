<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <form action="<?= base_url('/home/add')?>" method="post"></form>
        <div class="dropdown">
        <select class="custom-select custom-select-lg mb-3" name="name">
          <option >Open this select menu</option>
            <?php  foreach ($res as $row) :?>                        
            <option value="1"><?= $row->id?> </option>
            
            <?php endforeach; ?>
        </select>
        </div>
        <button class="btn btn-primary" type="submit">Add </button>
  </div>

 

</body>
</html>

