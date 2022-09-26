<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['tag_page']; ?></title>
</head>
<body>
  <section id="<?php echo $data['page_name']; ?>">
    <h1><?php echo $data['page_title']; ?></h1>
    
    <p><?php echo $data['page_content']; ?></p>
    <br>
    <br>
    <?= dep($data);?>
    <br>
    <br>
    <?= base_url(); ?>
    <br>
    <br>
  </section>
</body>
</html>