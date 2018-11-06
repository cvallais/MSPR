<?php
$title = 'Evenement';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>



<div id='calendar'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script>

$(function() {

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
  })

});
</script>


</div>


<a class="btn btn-primary"  href="add_event.php">Ajouter un évènement</a>
</div>
</main>

<?php include_once('layouts/footer.php') ?>
