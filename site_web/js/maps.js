function myLocation(position){
    // var geoInfos = "Ma position : <br/>";
    // geoInfos += "Latitude : "+position.coords.latitude;
    // geoInfos += " Longitude : "+position.coords.longitude;
    // geoInfos += " Altitude : "+position.coords.altitude;
    // geoInfos += " Vitesse : "+position.coords.speed;
    
    // document.getElementById("geolocation").innerHTML = geoInfos;

    //Position par défaut
    //var centerpos = new google.maps.LatLng(48.579400, 7.7519);
    var centerpos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    //Infos relatives carte
    var optionsGmaps = {
        center: centerpos,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom : 15
    };
    var map = new google.maps.Map(document.getElementById("maps"), optionsGmaps);
    //Marker Maps
    var marker = new google.maps.Marker({
        position: centerpos,
        map: map,
        title: "Vous êtes ici"
    });
}
/*function displayError(error){
    var info = "Erreur lors de la géolocalisation : ";
    switch(error.code){
        case error.TIMEOUT:
            info += "Timeout !";
        break;
        case error.PERMISSION_DENIED:
            info += "Vous n'avez pas donné la permission.";
        break;
        case error.POSITION_UNAVAILABLE:
            info += "La position n'a pu être déterminée !";
        break;
        case error.UNKNOWN_ERROR:
            info += "Erreur inconnue !";
        break;
    }
    //alert(error.message);
    alert(info+"   "+error.message);
}*/

if(navigator.geolocation){
    //alert('L\'API de géolocalisation en HTML 5 est disponible');
    navigator.geolocation.getCurrentPosition(myLocation);
    //navigator.geolocation.watchPosition(myLocation);
}
else{
    alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
}