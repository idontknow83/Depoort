<form action="{{env('app_url')}}/public/consults/store" method="POST">
    @csrf
    <label for="title">Afspraak Titel:</label>
    <input type="text" name="title" required>

    <label for="start_time">Start Tijd:</label>
    <input type="datetime-local" name="start_time" value="{{ $date }}" required>

    <label for="end_time">Eind Tijd:</label>
    <input type="datetime-local" name="end_time" required>

    <button type="submit">Afspraak Opslaan</button>
</form>