<div id="overlay" onclick="off()" style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color:#00000099; z-index: 2; color: white; font-size: 50px; display: flex; justify-content: center; align-items: center; flex-direction: column; cursor: pointer;">
    <p style="text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">{{ $message }}</p>
    <p style="font-size: 60%; text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;">{{ $subtitle }}
</div>

<script>
function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>