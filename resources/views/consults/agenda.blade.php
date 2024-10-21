<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender met Modal</title>
    
    <!-- FullCalendar CSS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    
    <!-- Bootstrap CSS voor modal -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FullCalendar JS -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
</head>
<body>

    <!-- Button to open the modal -->
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#afspraakModal">
        afspraak maken
    </button>

    <!-- Modal -->
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
                    <!-- Formulier binnen de modal -->
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

    <!-- jQuery en Bootstrap JS voor modal functionaliteit -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let calendar; // Variabele om de kalender toegankelijk te maken

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [] // Hier kunnen evenementen worden toegevoegd
            });
            calendar.render();
        });

        function submitForm() {
            // Haal waarden op uit het formulier
            var naam = document.getElementById('naam').value;
            var datum = document.getElementById('datum').value;
            var tijd = document.getElementById('tijd').value;

            // Controleer of de velden zijn ingevuld
            if (naam && datum && tijd) {
                // Voeg de afspraak toe aan de kalender
                calendar.addEvent({
                    title: naam,
                    start: datum + 'T' + tijd,
                    allDay: false
                });

                alert('Afspraak opgeslagen!\nNaam: ' + naam + '\nDatum: ' + datum + '\nTijd: ' + tijd);

                // Reset het formulier
                document.getElementById('afspraakForm').reset();
                
                // Sluit de modal
                $('#afspraakModal').modal('hide');
            } else {
                alert('Vul alle velden in!');
            }
        }
    </script>
</body>
</html>
