
  <?php 
  if (isset($participants)) {
  
  include_once('./php/list_participants.php')?>
  <?php 
    echo ($participants ? $participants->pseudo : '');
  ?>

 <?php
}
?>
