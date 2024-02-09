@extends('layouts.base')

@section('content')
<section class="m-4 p-2">
<div class="container">
     
    <div class="service-title m-5">
        <p class="title">Service Packs</p>
    </div>


    <div class="tile is-ancestor">
    
        <div class="tile is-parent">
            
          <article class="tile   is-child box box-fix">
            <p class="title p-2">Website Development</p>
            <p class="subtitle p-2">Trend your business over the wide network</p>
            <div class="content ">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
              
            <a href="{{ route('webdev') }}">
                <button class="button  is-medium is-link is-outlined" >
                  Get Started
                </button>
              </a>
          </article>
        </div>

        <div class="tile is-parent">
          <article class="tile is-child box box-fix">
            <p class="title p-2">Branding Packs</p>
            <p class="subtitle p-2">Your brand is your business face invest in it</p>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
              
            <a href="{{ route('brand') }}">
                <button class="button  is-medium is-link is-outlined" >
                  Make Your Brand
                </button>
              </a>
          </article>
        
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box box-fix">
            <p class="title p-2">CCTV Installation</p>
            <p class="subtitle p-2">Feel safe with your property secure a your hand</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>

              
            <a href="{{ route('cctv') }}">
                <button class="button  is-medium is-link is-outlined" >
                  Get Service
                </button>
              </a>
          </article>
        </div>
      </div>

    </div>
</section>

<section class="m-6 p-2">
    <div class="container">
         
    
        <div class="tile is-ancestor is-vcentered has-text-centered">
        
            <div class="tile is-parent">
                
              <article class="tile   is-child ">
                <p class="title p-2">Reliable</p>
                <figure class="image is-64x64 is-inline-block">
                  <img class="is-rounded" src="{{ asset('images/featureicons1.png') }}"/>
              </figure>
              </article>
            </div>
    
            <div class="tile is-parent">
              <article class="tile is-child ">
                <p class="title p-2">Deliver</p>
                <figure class="image is-64x64 is-inline-block">
                  <img class="is-rounded" src="{{ asset('images/featureicons2.png') }}"/>
              </figure>
              </article>
            
            </div>
            <div class="tile is-parent">
              <article class="tile is-child">
                <p class="title p-2">Efficient</p>
                <figure class="image is-64x64 is-inline-block">
                  <img class="is-rounded" src="{{ asset('images/featureicons3.png') }}"/>
              </figure>
    
                  
                
              </article>
            </div>
          </div>
    
        </div>
    </section>

@endsection