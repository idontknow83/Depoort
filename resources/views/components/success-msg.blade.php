<link rel="stylesheet" href="{{ config("app.url") }}/resources/css/component.css">
<div id="error-popup">
    <div id="message" style=" background-color: {{ $color }};">
        {{ $message }}
        <p onclick="dismissMessage()" style="cursor: pointer; padding-left: 5px; padding-right: 5px; margin: 0; color: black;">X</p>
    </div>
</div>

<script>
function dismissMessage() {
    document.getElementById("error-popup").style.display = "none";
}
</script>