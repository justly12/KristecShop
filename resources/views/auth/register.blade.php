@extends('layouts.base')

@section('content')
<section>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-3-tablet is-2-desktop is-2-widescreen">
                <div class="column is-three-fifths  is-offset-one-fifth  mt-3 mb-4 ">
                    <form class="box box-fix " method ="POST" action="{{ route('register') }}">
                       @csrf
                        <div class="field has-text-centered mt-5 ">
                            <img src="{{ asset('images/logoicon2.png') }}" width="167">
                        </div>
                        <div class="field">
                          <div class="service-title m-5 has-text-centered">
                            <p class="title">Sign Up</p>
                        </div>
                        </div>
                      <div class="field">
                      
                        <div class="control has-icons-left ">
                          <input class="input " type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                          @error('name')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                          <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                          </span>
                          <span class="icon is-small is-right">
                          <i class="fas fa-check"></i>
                          </span>

                         

                        </div>
                       
                      </div>

                      <div class="field">
                      
                        <div class="control has-icons-left ">
                          <input class="input " type="text" name="username" id="username" placeholder="Username"   value="{{ old('username') }}">
                          @error('username')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                          <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                          </span>
                          <span class="icon is-small is-right">
                          <i class="fas fa-check"></i>
                          </span>

                         

                        </div>
                       
                      </div>


                      <div class="field">
                        
                        <div class="control has-icons-left">
                          <input class="input " type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                          @error('email')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                          <span class="icon is-small is-left ">
                          <i class="fa fa-envelope"></i>
                          </span>
                          <span class="icon is-small is-right">
                          <i class="fa fa-exclamation-triangle"></i>
                          </span>
                        
                        </div>
                      </div>
                      <div class="field">
                       
                        <div class="control has-icons-left ">
                          <input class="input " type="password" name="password" id="password" placeholder="Password" >
                          @error('password')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                          <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                          </span>
                          <span class="icon is-small is-right ">
                          <i class="fa fa-exclamation-triangle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="field">
                        
                        <div class="control has-icons-left ">
                          <input class="input " type="password" name="password_confirmation" placeholder="Confirm Password.." >
                         
                          <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                          </span>
                          <span class="icon is-small is-right">
                          <i class="fa fa-exclamation-triangle"></i>
                          </span>
                        </div>
                      </div>
                      <div class="field">
                       
                        <div class="control has-icons-left ">
                          <input class="input " type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number.." value="{{ old('phonenumber') }}">
                           
                          @error('phonenumber')
                          <div class="ml-4 has-text-danger">
                              {{ $message }}
                          </div>
          
                        @enderror
                          
                          <span class="icon is-small is-left">
                          <i class="fa fa-user"></i>
                          </span>
                          <span class="icon is-small is-right">
                          <i class="fa fa-check"></i>
                          </span>
                        </div>
                      </div>
                      <div class="field m-4">
                        <label class="label">Gender</label>
                        <div class="control">
                          <label class="radio">
                          <input type="radio" name="answer">
                          Male
                          </label>
                          <label class="radio">
                          <input type="radio" name="answer">
                          Female
                          </label>
                        </div>
                      </div>
                      <div class="field m-4 pt-3">
                        <div class="control ">
                          <label class="checkbox">
                          <input type="checkbox">
                          I agree to the <a href="#">terms and conditions</a>
                          </label>
                        
                        </div>
                      </div>
                      <div class="field">
                        <button class="button is-link is-outlined is-fullwidth mb-5 mt-2">
                              <p class="pt-2 pb-2 px-6">Register</p>
                          </button>
                          <p class='is-right m-4'>Already have an account?
                            <a href="{{ route('login') }}" class="is-link">
                                Login
                              </a>
                            </p>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</section>

<section class="m-6 p-2">
  <div class="container is-mobile">
       
  
      <div class="tile is-ancestor is-vcentered has-text-centered">
      
          <div class="tile is-parent">
              
            <article class="tile   is-child ">
              <p class="title p-2">Reliable</p>
              <figure class="image is-64x64 is-inline-block ">
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