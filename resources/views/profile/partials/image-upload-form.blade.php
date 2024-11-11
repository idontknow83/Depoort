<link rel="stylesheet" href="{{ config("app.url") }}/resources/css/partials.css">
@if (session('success'))
<x-success-msg message="{{ session('message') }}" color="green" />
@elseif (session('error'))
<x-success-msg message="{{ session('message') }}" color="red" />
@endif

<form action="{{ url('/account/upload') }}" method="POST" class="upload-container" enctype="multipart/form-data">
    @csrf
    <label class="upload-label" for="file-upload">Bestand kiezen</label>
    <input type="file" name="file" id="file-upload">
    <input type="submit" class="upload-button" value="Upload"></input>
</form>