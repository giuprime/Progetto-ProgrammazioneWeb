<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAPPA</title>
    <style>
    #map{
      height:500px;
      width:100%;
    }

    bodY{
      background-image: url("{{ asset('assets/images/back.png') }}") !important;
    }
  </style>
</head>
<body>
<br><a href="{{ url('/') }}" class="text-sm text-gray-700 underline"><img src="{{ asset('assets/images/homepage.png') }}" alt="Clicca per tornare alla Homepage" width="35" height="40"></a><br>HOMEPAGE<br><br>

<h3>Qui sono rappresentati tutti i dipartimenti dell'universita' degli Studi di Messina, cliccando con il mouse su ogni marcatore sceglierai il dipartimento di tuo interesse e potrai visualizzare il numero di problemi segnalati.</h3>


  <div id="map"></div>

<script>

function initMap(){
  // Map options - INIZIALIZZARE MAPPA
  var options = {
    zoom:11,
    center:{lat:38.187480,lng:15.545027}

  }

  // New map
  var map = new google.maps.Map(document.getElementById('map'), options);


  /*
  // AGGIUNGERE ICONE SULLA MAPPA
  google.maps.event.addListener(map, 'click', function(event){
    // Add marker
    addMarker({coords:event.latLng});
  });*/

  // Array of markers
  var markers = [


       {
       coords:{lat:38.189182,lng:15.553719},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
      // iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
       <?php  echo "content:'<h4>Dipartimento di Economia <br> Problemi segnalati:  {$dipa2}</h4> <br> <h4> Dipartimento di Giurisprudenza <br> Problemi segnalati:  {$dipa3} </h4>'"; ?>

      },
      {
       coords:{lat:38.259954,lng:15.596671},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
       <?php  echo "content:'<h4>Dipartimento di Ingegneria <br> Problemi segnalati:  {$dipa4} <h4>Dipartimento MIFT <br> Problemi segnalati:  {$dipa10}</h4>'"; ?>
      },
      {
       coords:{lat:38.144287,lng:15.528189},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
       <?php  echo "content:'<h4>Dipartimento di Medicina Clinica e sperimentale <br> Problemi segnalati:  {$dipa5}</h4> <br> <h4> Dipartiemnto di Patologia umana e dell adulto <br> Problemi segnalati: {$dipa6} </h4> <br> <h4> Dipartiemnto di Scienze Biomediche odontoiatriche <br> Problemi segnalati: {$dipa7} </h4>'"; ?>
      },
      {
       coords:{lat:38.230426,lng:15.552775},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
       <?php  echo "content:'<h4>Dipartimento di Civilita antiche e moderne <br> Problemi segnalati:  {$dipa1}</h4> <h4>Dipartimento di Scienze chimiche biologiche farmaceutiche ed ambientali <br> Problemi segnalati:  {$dipa8}</h4> <h4>Dipartimento di Veterinaria <br> Problemi segnalati:  {$dipa12}</h4>'"; ?>
      },
      {
       coords:{lat:38.199338,lng:15.556260},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
       <?php  echo "content:'<h4>Dipartimento di Scienze cognitive psicologiche<br> Problemi segnalati:  {$dipa9}</h4>'"; ?>
      },
      {
       coords:{lat:38.192395,lng:15.547188},
       iconImage:'https://www.google.com/mapfiles/arrow.png',
       <?php  echo "content:'<h4>Dipartimento di Scienze politiche e giuridiche <br> Problemi segnalati:  {$dipa11}</h4>'"; ?>
      }
];


  // Loop through markers
          for(var i = 0;i < markers.length;i++){
    // Add marker
      addMarker(markers[i]);
  }

  // Add Marker Function
    function addMarker(props){
      var marker = new google.maps.Marker({
        position:props.coords,
        map:map,
        //icon:props.iconImage
      });

    // Check for customicon
      if(props.iconImage){
        // Set icon image
        marker.setIcon(props.iconImage);
      }

      // Check content
      if(props.content){
        var infoWindow = new google.maps.InfoWindow({
          content:props.content
      });

        marker.addListener('click', function(){
          infoWindow.open(map, marker);
        });
      }
    }
  }
          </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcIkTPvI7LKDps2W8CNiQUqlKT_VkELC4&callback=initMap">
          </script>
    
</body>
</html>