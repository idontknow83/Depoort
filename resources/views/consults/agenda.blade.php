
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
@if (session('succes'))
<x-success-msg message="{{session ('message')}}" color="green"/>
@elseif (session('error'))
<x-success-msg message="{{session ('message')}}" color="red"/>
@endif


    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#afspraakModal">
        Afspraak maken
    </button>

    <form method="POST" action={{url('/agenda/create')}} class="modal fade" id="afspraakModal" tabindex="-1" aria-labelledby="afspraakModalLabel" aria-hidden="true">
       @method('PUT')
       @csrf
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
                            <input type="text" name="name" class="form-control" id="naam" placeholder="Vul je naam in" required>
                        </div>
                        <div class="form-group">
                            <label for="datum">Datum</label>
                            <input type="date" name="date" class="form-control" id="datum" required>
                        </div>
                        <div class="form-group">
                            <label for="tijd">Starttijd</label>
                            <input type="time" name="start_time" class="form-control" id="start_time" required>
                        </div>
                        <div class="form-group">
                            <label for="eindtijd">Eindtijd</label>
                            <input type="time" name="end_time" class="form-control" id="end_time" required>
                        </div>
                        <div class="form-group">
                            <label for="reden">Reden</label>
                            <textarea class="form-control" name="reason" id="tekst" placeholder="Geef een reden voor de afspraak" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <input type="submit" class="btn btn-primary">Afspraak Opslaan</button>
                </div>
            </div>
        </div>
    </form>

    <div id='calendar'></div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    </script>
</body>
</html>
