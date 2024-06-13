<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $titulo; ?> | NHDev</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
   <?php
      include_once __DIR__ . '/templates/header.php';
      echo $contenido;
      include_once __DIR__ . '/templates/footer.php';
   ?>
</body>
</html>