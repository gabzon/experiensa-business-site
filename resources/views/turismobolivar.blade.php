{{--
Template Name: Turismo Bolivar
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <br>
    <div class="row">
      <div class="col-3">
        <div id="list-example sticky-top" class="list-group">
          <a class="list-group-item list-group-item-action" href="#list-item-1">Informacion general</a>
          <a class="list-group-item list-group-item-action" href="#list-item-2">Objetivos</a>
          <a class="list-group-item list-group-item-action" href="#list-item-3">Tareas y responsabilidades</a>
          <a class="list-group-item list-group-item-action" href="#list-item-4">Requirements</a>
        </div>
      </div>
      <div class="col-9">
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

          <section id="list-item-1">
            <h4>Informacion General</h4>
            @include('discovering.general')
          </section>

          <section id="list-item-2" class="pt-5">
            <hr>
            <h4>Objectivos</h4>
            @include('discovering.goals')
          </section>


          <section id="list-item-3" class="pt-5">
            <hr>
            <h4 class="">Convenio</h4>
            @include('discovering.responsabilities')
          </section>


          <section id="list-item-4" class="pt-5">
            {{-- <hr>
             <h4 id="">Responsabilities</h4> --}}
            @include('discovering.requirements')
          </section>
          <br>
        </div>
      </div>
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
