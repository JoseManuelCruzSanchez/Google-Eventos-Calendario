<?php
$ID_del_Calendario = "";
$apikey = "";
$fechaParametroAPI = $_GET['fecha'];
$urlConsultaAPI = 'https://www.googleapis.com/calendar/v3/calendars/' . $ID_del_Calendario . '/events?key=' . $apikey . '&singleEvents=true&timeMin='. $fechaParametroAPI . '&orderBy=starttime';
//$urlConsultaAPI = 'https://www.googleapis.com/calendar/v3/calendars/' . $ID_del_Calendario . '/events?key=' . $apikey . '&singleEvents=true&timeMin='. $fechaParametroAPI . '&maxResults=4&orderBy=starttime';


$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, $urlConsultaAPI);
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

//$jsonData = json_decode(curl_exec($curlSession));
echo curl_exec($curlSession);
curl_close($curlSession);

?>
