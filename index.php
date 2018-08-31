<!DOCTYPE html>
<html>
<body>


<script>

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {

        document.getElementById('flat').value = position.coords.latitude;
        document.getElementById('flon').value = position.coords.longitude;
        document.getElementById('form1').submit();
    }

</script>
<form id="form1" action="save.php" method="post">
    <input id="flat" type="hidden" name="lat" value="">
    <input id="flon" type="hidden" name="lon" value="">
</form>
    <button onclick="getLocation()">Try It</button>
</body>
</html>
