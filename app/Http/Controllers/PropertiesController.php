<?php

namespace App\Http\Controllers;

use App\Mail\Command;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropertiesController extends Controller
{
    

    public  function index(){
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://bayut.p.rapidapi.com/properties/list?locationExternalIDs=5002%2C6020&purpose=for-rent&hitsPerPage=25&page=0&lang=en&sort=city-level-score&rentFrequency=monthly&categoryExternalID=4",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: bayut.p.rapidapi.com",
		"X-RapidAPI-Key: e5210f0a6bmsh9cd3176b3344994p174048jsn161017ba2ab7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$result = json_decode($response);
    $result = $result->hits;
	return view('website_pages.properties', compact('result'));
}
        


}

public function show($id){

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://bayut.p.rapidapi.com/properties/detail?externalID=".$id,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: bayut.p.rapidapi.com",
		"X-RapidAPI-Key: e5210f0a6bmsh9cd3176b3344994p174048jsn161017ba2ab7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$result = json_decode($response);
	return view('admin_pages.showTransac', compact('result'));
}

}

public function send(){

	Mail::to('couthonmallory@gmail.com')->send(new Command());
	return view('emails.sendEmail');
}

}