<?php
$title = 'Accueil';
$description = '' ;
?>

<?php include_once('layouts/header.php') ?>

<div class="container-fluid mt-5">
  <h1>Les meilleurs événements sur Nantes</h1>
  <h2>Liste de nos événements sur Nantes</h2>
  <div class="card">
    <div class="card-body">
      <table class="table table-striped table-hover table-bordered">
        <?php include('php/get_5_events.php'); ?>


        <!--le contenu-->

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="list-group" id="list-tab" role="tablist">
              <?php $i = 0; ?>
              <?php foreach($events as $event) {?>
                <?php $i = $i + 1 ?>
                <a class="list-group-item list-group-item-action <?php echo ($i == 1 ? 'active' : '')  ?>" id="list-home-list" data-toggle="list" href="#list-home<?php echo $event['id']; ?>" role="tab" aria-controls="home"><?php echo $event['name_event'];?></a>

              <?php } ?>
            </div>
            <!-- le bouton qui permet d'ajouter un évènement n'est visible que si on est connecté-->
            <?php if (isset($_SESSION['user']['id'])) {
              ?>
              <a class="btn btn-outline-secondary mt-5"  href="add_event.php">Ajouter un évènement</a>
            <?php } ?>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="tab-content" id="nav-tabContent">
              <?php $i = 0; ?>
              <?php foreach($events as $event) {?>
                <?php $i = $i + 1 ?>
                <div class=" card tab-pane fade show <?php echo ($i == 1 ? 'active' : '')  ?>" id="list-home<?php echo $event['id']; ?>" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="card-body">
                    <?php echo $event['place']; ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


          <!--le calendrier-->
          <div class="col-lg-5">
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
                            start  : '<?php echo $event['date_start']; ?>',
                            end  : '<?php echo $event['date_end']; ?>'
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

        </div>
      </div>

    </table>
  </div>
</div>
</div>
<?php include_once('layouts/footer.php') ?>
