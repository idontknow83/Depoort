<link rel="stylesheet" href="{{ config("app.url") }}/resources/css/component.css">
<div id="overlay" onclick="off()">
    <p>Je hebt nog geen foto geüpload</p>
    <div style="display: flex; font-size: 30px;">
        <p>klik</p><a href="{{ url('/account/upload') }}" style="margin-left: 8px; margin-right: 8px; text-decoration: underline;">hier</a><p>om een foto te uploaden</p>
    </div>
</div>

<script>
function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
