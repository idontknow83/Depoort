<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender met Modal</title>
    
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
</head>
<body>

    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#afspraakModal">
        afspraak maken
    </button>

    <div class="modal fade" id="afspraakModal" tabindex="-1" aria-labelledby="afspraakModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="afspraakModalLabel">Afspraak Maken</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
              
                    <form id="afspraakForm">
                        <div class="form-group">
                            <label for="naam">Naam</label>
                            <input type="text" class="form-control" id="naam" placeholder="Vul je naam in" required>
                        </div>
                        <div class="form-group">
                            <label for="datum">Datum</label>
                            <input type="date" class="form-control" id="datum" required>
                        </div>
                        <div class="form-group">
                            <label for="tijd">Tijd</label>
                            <input type="time" class="form-control" id="tijd" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <button type="button" class="btn btn-primary" onclick="submitForm()">Afspraak Opslaan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div id='calendar'></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let calendar; 

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [] 
            });
            calendar.render();
        });

        function submitForm() {
            var naam = document.getElementById('naam').value;
            var datum = document.getElementById('datum').value;
            var tijd = document.getElementById('tijd').value;

            if (naam && datum && tijd) {
              
                calendar.addEvent({
                    title: naam,
                    start: datum + 'T' + tijd,
                    allDay: false
                });

                alert('Afspraak opgeslagen!\nNaam: ' + naam + '\nDatum: ' + datum + '\nTijd: ' + tijd);

             
                document.getElementById('afspraakForm').reset();
                
              
                $('#afspraakModal').modal('hide');
            } else {
                alert('Vul alle velden in!');
            }
        }
    </script>
</body>
</html>
