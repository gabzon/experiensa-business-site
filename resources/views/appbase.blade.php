{{--
Template Name: Appbase
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @php

    // $curl = curl_init();
    //
    // curl_setopt_array($curl, array(
    //   //CURLOPT_URL => "https://scalr.api.appbase.io/housing-demo/listing/_search",
    //   CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/_search",
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => "",
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 30,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => "POST",
    //   CURLOPT_POSTFIELDS => json_encode(array(
    //     "query" => array(
    //       "match_all" => new stdClass()
    //     )
    //   )),
    //   CURLOPT_HTTPHEADER => array(
    //     "Authorization: Basic OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==",
    //     "Content-Type: application/json"
    //   ),
    // ));
    //
    // $response = curl_exec($curl);
    // $err = curl_error($curl);
    //
    // curl_close($curl);
    //
    //
    // if ($err) {
    //   echo "cURL Error #:" . $err;
    // } else {
    //   $json = json_decode($response, true);
    //   print_r("@search hits: ");
    //   echo '<pre>';
    //   print_r($json['hits']);
    //   echo '</pre>';
    // }

    // 9IkWB4szj:ca550d2c-db4a-4021-992d-a7d4635ca12a
    // OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==

    echo '<hr>';

    $curl = curl_init();

    $jsonObj = json_encode(array(
      "id"                => 23,
      "title"             => "Delta Travel",
      "content"           => "I am super delta",

      "client_country"    => "Switzerland",
      "client_state"      => "GE",
      "client_postal_code"=> 1223,
      "client_city"       => "Geneva",
      "client_address"    => "Rue du voyage",

      "categories"        =>  ['promotions'] ,
      "tags"              =>['Business', 'Corporate'] ,
      "countries"         => ['China', 'Japan'],
      "themes"            => ['Business', 'Corporate', 'Luxery'],
      "world_regions"     => ['Asia'],

      "client_type"       => "Agency",
      "email"             => "delta@delta.com",
      "website"           => "delta.ch",
      "phone"             => "+31 312 332 3934",
    ));



    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $jsonObj,
      CURLOPT_HTTPHEADER => array(
        "Authorization: Basic djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==",
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $json = json_decode($response, true);
      print_r("@index success: ");
      echo '<pre>';
      print_r($json);
      echo '</pre>';
    }
    @endphp




  @endwhile
@endsection
