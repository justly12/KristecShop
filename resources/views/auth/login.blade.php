@extends('layouts.base')

@section('content')
<section class="">
    <div class="hero-body">
        <div class="container ">
          <div class="columns is-3-tablet is-2-desktop is-2-widescreen">
              <div class="column is-half is-offset-one-quarter  mt-3 mb-4 ">
                  
            
                 
                  <form class="box box-fix "  action="{{ route('login') }}" method="POST">

                   

                    @csrf
                      <div class="field has-text-centered mt-5 ">
                          <img src="{{ asset('images/logoicon2.png') }}" width="167">
                      </div>
                      <div class="field">
                        <div class="service-title m-5 has-text-centered">
                          <p class="title">Log In</p>
                      </div>
                      </div>
                      @if(session('status'))

                      <div class="field ">
                            
                          <div class="control  ml-2 has-icons-left">
                              <input type="text" name="status" id="warnings" class="input has-background-danger has-text-white" disabled value="{{ session('status') }}">
  
                              <span class="icon is-small is-white is-left">
                                  <i class="fas fa-exclamation-triangle"></i>
                                  </span>
                          </div>
                      </div>
  
  
                      
                       @endif
                      <div class="field">
                          
                          <div class="control has-icons-left">
                              <input type="email" name="email" id="email" class="input" placeholder="Enter Email..">

                              
                          @error('email')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                              <span class="icon is-small is-left">
                                  <i class="fa fa-envelope"></i>
                              </span>
                              <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                                </span>
                          </div>
                      </div>
                      <div class="field">
                          
                          <div class="control has-icons-left">
                              <input type="password" class="input" name="password" id="password" placeholder="Password ****" >
                              @error('password')
                              <div class="ml-4 has-text-danger">
                                  {{ $message }}
                              </div>
              
                            @enderror
                              <span class="icon is-small is-left">
                                  <i class="fa fa-lock"></i>
                              </span>
                              <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                                </span>
                          </div>
                      </div>
                      <div class="field m-5">
                          <label class="checkbox">
                              <input type="checkbox">
                              Remember me
                          </label>
                      </div>
                      <div class="field has-text-right m-5">

                        <p>Don't Have an Account?
                            <a  href="{{ route('register') }}" class="is-link">
                                Sign Up
                              </a>
                            </p>


                        <a class="is-link">
                          Forgotten Password?
                        </a>
                       
                    </div>
                      <div class="field">
                        <button class="button is-link is-outlined is-fullwidth mb-5 mt-2">
                              <p class="pt-2 pb-2 px-6">Login</p>
                          </button>
                      </div>
                  </form>
              </div>
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