<h1>Contact Us</h1><br>

<form id="contact" action="?page=contact" method="POST" style="float: left">
    <div class="row">
        <label for="name">Your name:</label><br/>
        <input id="name" class="input" name="name" type="text" value="" size="30" /><br/><br>
    </div>
    <div class="row">
        <label for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br/><br>
    </div>
    <div class="row">
        <label for="message">Your massage:</label><br/><br>
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br/><br>
    </div>
    <input id="submit_button" type="image" src="img/send4.svg" value="Send email" width="22"/>
</form>
<div id="googleMap" style="width: 65%;height:410px; position: fixed; float: right; bottom: 80px"></div>





<script>
    var myCenter=new google.maps.LatLng(51.508742,-0.120850);

    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:8,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
