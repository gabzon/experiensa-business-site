{{--
Template Name: Appbase
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      //CURLOPT_URL => "https://scalr.api.appbase.io/housing-demo/listing/_search",
      CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/_search",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode(array(
        "query" => array(
          "match_all" => new stdClass()
        )
      )),
      CURLOPT_HTTPHEADER => array(
        "Authorization: Basic OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==",
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
      print_r("@search hits: ");
      echo '<pre>';
      print_r($json['hits']['hits']);
      echo '</pre>';
    }

    // 9IkWB4szj:ca550d2c-db4a-4021-992d-a7d4635ca12a
    // OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==

    echo '<hr>';

    $curl = curl_init();

    $jsonObj = json_encode(array(
      "id"              => "339",
      "date"            => "2019-07-23T15:17:27",
      "date_gmt"        => "2019-04-23T15:17:27",
      "modified"        => "2019-12-18T14:43:18",
      "modified_gmt"    => "2019-12-18T14:43:18",
      "slug"            => "WestTravel Montenegro",
      "status"          => "publish",
      "type"            => "exp_client",
      "featured_media"  => 869,
      "parent"          => 0,
      "menu_order"      => 0,
      "template"        => "dancefloor",
      "categories"      => ["beach", "romantique"],
      "link"            => "https:\/\/experiensa.com\/exp_client\/stohler\/",
      "guid"            => ["rendered" => "http:\/\/experiensa.com\/?post_type=exp_client&#038;p=865"],
      "title"           => ["rendered" => "West Travel Montenegro"],
      "content"         => ["rendered" => "", "protected" => false ],
      "jetpack_sharing_enabled" => false,
      "jetpack_likes_enabled"   => false,
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
        "Authorization: Basic OUlrV0I0c3pqOmNhNTUwZDJjLWRiNGEtNDAyMS05OTJkLWE3ZDQ2MzVjYTEyYQ==",
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
      print_r($json);
    }
    @endphp




  @endwhile
@endsection
