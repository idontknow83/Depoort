<link rel="stylesheet" href="{{ config("app.url") }}/resources/css/partials.css">
@if (session('success'))
<x-success-msg message="{{ session('message') }}" color="green" />
@elseif (session('error'))
<x-success-msg message="{{ session('message') }}" color="red" />
@endif
</form>
</head>
<body>

<div class="upload-container">
    <label class="upload-label" for="file-upload">Bestand kiezen</label>
    <input type="file" id="file-upload" onchange="showFileName()">
    <span class="upload-info" id="file-info">Geen bestand gekozen</span>
    <button class="upload-button" onclick="uploadFile()">Upload</button>
</div>

<script>
    function showFileName() {
        const fileInput = document.getElementById('file-upload');
        const fileInfo = document.getElementById('file-info');
        fileInfo.textContent = fileInput.files.length > 0 ? fileInput.files[0].name : 'Geen bestand gekozen';
    }

    function uploadFile() {
        alert("Upload functionality is not implemented in this example.");
    }
</script>

</body>
</html>