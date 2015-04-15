<?php
  // Convert Page Title to lower case for use in body ID tag
  $pageID = strtolower($pageTitle);
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle; ?> | CNT Group</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body id="<?php echo $pageID; ?>">
    <header>
      <div class="row">
        <a href="index.php"><img class="logo" src="logos/cntlogo.png"/></a>
         
        <!-- Include the navigation -->
        <?php include 'nav.php'; ?>
        
         </div>
    </header>
