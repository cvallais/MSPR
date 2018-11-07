<?php
$title = 'Evenement';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>


<div class="container col-lg-6 mt-5">

<!-- le bouton qui permet d'ajouter un évènement n'est visible que si on est connecté-->
<?php if (isset($_SESSION['user']['id'])) {
  ?>
    <a class="btn btn-outline-secondary"  href="add_event.php">Ajouter un évènement</a>
<?php } ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

  <div id='calendar'>

    <script>
    $(function() {
      $('#calendar').fullCalendar({
        themeSystem: 'bootstrap4',
        selectable: true,
        locale: 'fr',
        timeFormat: '(H:mm)',
        defaultDate: moment().today,
        defaultViex: 'month',
        header: {
          left: 'title',
          center: '',
          right: 'today prev,next month,basicWeek',

        },
        buttonText: {
          today: 'Aujourd\'hui',
          month: 'Mois',
          week: 'Semaine',
          day: 'Jour',
          list: 'Liste'
        },
        eventSources: [
          {
            events: [
              <?php require_once('php/get_events.php'); ?>
              <?php foreach($events as $event){ ?>
              {
                title  : '<?php echo $event['name_event']; ?>',
                start  : '<?php echo $event['date']; ?>'
              },
              <?php } ?>
            ],
          }
        ]
      });
    });
      </script>
</div>
</div>
</div>
</main>


<?php include_once('layouts/footer.php') ?>
