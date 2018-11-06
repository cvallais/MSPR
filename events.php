<?php
$title = 'Evenement';
$description = '' ;
?>


<?php include_once('layouts/header.php') ?>
<div class="container">



  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>


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
              {
                title  : 'Pourquoi pas ',
                start  : '2018-11-09'
              },
              {
                title  : 'Tournoi Dota 2',
                start  : '2018-11-11',
                end    : '2018-11-15'
              },
              {
                title  : 'Foire de l\'oignon',
                start  : '2018-11-12T12:30:00',
              }
            ],
            color: 'red',
            textColor: 'lightblue'
          }

        ]
      });
    });
  </script>


</div>


<a class="btn btn-primary"  href="add_event.php">Ajouter un évènement</a>
</div>
</div>
</main>


<?php include_once('layouts/footer.php') ?>
