<!DOCTYPE html>
<html lang='eng'>
    <head>
      <link rel="shortcut icon" href="{{ asset('images/logoicon3.png') }}" width='4' height='3' />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        
        

        <title>Kristec Shop</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        
        <script rel="type/javascript" href="{{ asset('/css/fontawesome.min.css') }}"></script>

   
       
        <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

        });
        });

        });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {

                // Check for click events on the navbar burger icon
                $(".navbar-burger").click(function() {
            
                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    $(".navbar-burger").toggleClass("is-active");
                    $(".navbar-menu").toggleClass("is-active");
                    



                });
              

            });
    </script>

    </head>

    <body>

                
        <nav class="navbar mt-1 mb-1 mx-1 has-background-grey-lighter navbox" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="{{ route('home') }}">
                <img src="{{ asset('images/logoicon2.png') }}" width="50" height="200">
                <strong class="title-header">Kristec</strong>
              </a>
          
              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item" href="{{ route('home')}}">
                  Home
                </a>
          
                <a class="navbar-item" href="{{ route('onlinestore')}}">
                  Online Store
                </a>
          
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class=" dropdown-trigger navbar-link" href={{ route('servicepacks') }}>
                    Service Packs
                  </a>
          
                  <div class="navbar-dropdown">
                    <a class="navbar-item">
                      Website Packs
                    </a>
                    <a class="navbar-item">
                      Brand Packs
                    </a>
                    <a class="navbar-item">
                      CCTV Packs
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                      Need Extra Service
                    </a>
                  </div>
                </div>

                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" >
                      About Company
                    </a>

                  <div class="navbar-dropdown">
                    
                    <a class="navbar-item" href="{{ route('contact-us') }}">
                      Contact Us
                    </a>
                    
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="{{ route('faqs') }}">
                      FAQs
                    </a>
                  </div>
                </div>

               

              </div>
          
              @auth
              <div class="navbar-end mr-4">
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link" href="{{ route('dashboard') }}" >
                    {{ auth()->user()->username }}'s Account
                  </a>

                <div class="navbar-dropdown is-right">
                  
                  <a class="navbar-item">
                    Cart
                  </a>
                  <a class="navbar-item">
                    My Checkout
                  </a>
                  <hr class="navbar-divider navbar-item">
                  <form class="has-text-centered" action="{{ route('logout') }}" method="POST">
                    @csrf
                  <button class="button is-success is-outlined" href="{{ route('logout') }}">
                    Logout
                  </button>
                </form>
                </div>
              </div>
              </div>
              @endauth
              @guest
              <div class="navbar-end mr-4">
                <div class="navbar-item">
                  <div class="buttons">
                    <a class="button is-link " href="{{ route('register')}}">
                      <strong class="pt-1.5 pb-1.5 px-3" >Sign up</strong>
                    </a>
                    <a class="button is-link is-outlined" href="{{ route('login')}}">
                      Log in
                    </a>
                  </div>
                </div>
              </div> 
              @endguest
              




            </div>
          </nav>
  

        @yield('content')

        <footer class="footer">
            <div class="content has-text-centered">
              <p>
                
                    <a class="" href="/home">
                      <img src="{{ asset('images/kristec-logo.png') }}" width="100" height="200">
                    </a>
                    <br/>
              
                    <div class = "field">
                       
                        <div class = "control ">
                           <p class = "control has-text-centered has-icons-left has-icons-right ">
                            <input class="input " type="text" placeholder="Search">
                              
                              <span class = "icon is-small is-right">
                                 <i class = "fas fa-search"></i>
                              </span>
                           </p>
                        </div>
                     </div>
                    <div class='navbar-end'>
                    </div>
                    </a> 
                The website content
                is 	&#169 Copyrights of <a href="{{ route('register')}}">Kristec Developers &#174 &#8482</a>.
              </p>
            </div>
          </footer>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://code.jquery.com/qunit/qunit-2.19.1.css" integrity="sha256-WnY9cf22d+TuYatHjZ2otD1X+M7TGpB9rcnhB5UKvmI=" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/qunit/qunit-2.19.1.js" integrity="sha256-JKXf8hYyT6TCyX2GIQgbqsBGOx1Fq4kI0IHuoTxbj44=" crossorigin="anonymous"></script>
          <script rel="type/javascript" src="{{ URL('/js/app.js') }}"></script>
          <script rel="type/javascript" src="{{ URL('/js/fontawesome.min.js') }}"></script>
    </body>
</html>