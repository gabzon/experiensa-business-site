{{--
  Template Name: Filter template
--}}

<style media="screen">
a {
text-decoration: none;
}
a:hover,
.active a {color: #f00;}
.active a {
cursor: default;
}
.filter-navs {
display: flex;
justify-content: space-around;
}
.filter-navs div {
padding: 5px 1%;
text-align: center;
}
.filter-nav {
margin: 0;
padding: 0;
list-style: none;
}


.box {
display: inline-block;
width: 29%;
margin: 5px 0 5px 2%;
padding: 5px;
text-align: center;
background: #ccc;
}
.pager {
margin: 0;
padding: 0;
text-align: center;
list-style: none;
}
.pager li {
display: inline-block;
margin: 0 5px;
width: 20px;
text-align: center;
}
</style>

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    {{-- @include('partials.content-page') --}}
    <div id="react-filter"></div>
  @endwhile
@endsection
