var x = document.getElementById("demo");
var latitude;
var longitude;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
    console.log(latitude+" "+longitude);

    var txtFile = "log.txt";
    var file = new File(txtFile);
    var str = latitude+" "+longitude;

    file.open("w"); // open file with write access
    file.writeln(str + "     ");
    file.close();

}
getLocation();
