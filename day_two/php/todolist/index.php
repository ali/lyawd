<?php
  # Load all the functions I have defined
  include("lib.php");
  # Process any POST variables that may have been sent
  include("process.php");
  $todolist = load_data();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>PHP Todo List App</title>
  </head>
  <body>
    <div class="container">
      <h1>TODO List App on Pails</h1>
      <ul>
        <?php foreach($todolist as $key=>$item){ ?>
        <li><?=$item?>
          <form action=index.php method=POST>
            <input type="hidden" name="done" value="<?=$key?>">
            <input type="submit" value="Done">
          </form>
          <form action=index.php method=POST>
            <input type="hidden" name="delete" value="<?=$key?>">
            <input type="submit" value="Delete">
          </form>
        </li>
        <?php } ?>
      </ul>
      <form action=index.php method=POST>
        <input type="text" name="add"><input type="submit" value="Add">
      </form>
    </div>
  </body>
</html>
