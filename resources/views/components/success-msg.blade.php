<div id="error-popup" style="display: flex; justify-content: center;">
    <div style="margin: 5px; padding: 5px; border: 2px solid black; border-radius: 10px; font-weight: bold; color: white; background-color: {{ $color }}; display: flex; justify-content: center; align-items: center;">
        {{ $message }}
        <p onclick="dismissMessage()" style="cursor: pointer; padding-left: 5px; padding-right: 5px; margin: 0; color: black;">X</p>
    </div>
</div>

<script>
function dismissMessage() {
    document.getElementById("error-popup").style.display = "none";
}
</script>