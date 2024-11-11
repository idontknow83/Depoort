<link rel="stylesheet" href="{{ config("app.url") }}/resources/css/Component.css">
<div id="overlay" onclick="off()">
    <p>{{ $message }}</p>
    <p>{{ $subtitle }}</p>
</div>

<script>
function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
