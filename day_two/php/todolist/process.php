<?php

if(isset($_POST['add']))
  todolist_add($_POST['add']);

elseif(isset($_POST['delete']))
  todolist_delete($_POST['delete']);

elseif(isset($_POST['done']))
  todolist_done($_POST['done']);

?>
