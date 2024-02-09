@extends('layouts.base')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
</head>

<section class="section">
    <div class='carousel is-1 carousel-animated carousel-animate-slide'>
        <div class='carousel-container '>
          <div class='carousel-item is-active  '>
            <figure class="image is-16by12 "><img src="{{ asset('images/back1.jpg') }}"></figure>
            <div class="intro-words mt-3 " >
                <p class="subtitle is-1 p-4" >Welcome to Kristec Developers KENYA</p>
                <p class="subtitle is-3 p-4" > Reliable, Efficient, Deliver </p>
                
                <a class="p-4" href="{{ route('servicepacks') }}">
                  <button class="button  is-medium is-black is-outlined " >
                    Get Our Best Services
                  </button>
                </a>
                <div class="small-navs mt-6">
                  <section >
                    <div class="container">
                         
                    
                        <div class="tile is-ancestor has-text-centered">
                        
                            <div class="tile is-parent">
                                
                              <article class="tile   is-child ">
                                <p >Reliable</p>
                                <figure class="image is-64x64 is-inline-block">
                                  <img class="is-rounded" src="{{ asset('images/featureicons1.png') }}"/>
                              </figure>
                              </article>
                            </div>
                    
                            <div class="tile is-parent">
                              <article class="tile is-child ">
                                <p >Deliver</p>
                                <figure class="image is-64x64 is-inline-block">
                                  <img class="is-rounded" src="{{ asset('images/featureicons2.png') }}"/>
                              </figure>
                              </article>
                            
                            </div>
                            <div class="tile is-parent">
                              <article class="tile is-child">
                                <p >Efficient</p>
                                <figure class="image is-64x64 is-inline-block">
                                  <img class="is-rounded" src="{{ asset('images/featureicons3.png') }}"/>
                              </figure>
                    
                                  
                                
                              </article>
                            </div>
                          </div>
                    
                        </div>
                    </section>


                </div>
            </div>
          
            
          </div>
          <div class='carousel-item'>
            <figure class="image is-16by12"><img src="{{ asset('images/back2.jpg') }}"></figure>
          </div>
          <div class='carousel-item'>
            <figure class="image is-16by12"><img src="{{ asset('images/back3.jpg') }}"></figure>
          </div>
        </div>
        <div class="carousel-navigation is-centered">
          <div class="carousel-nav-left">
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="carousel-nav-right">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
</section>



		<script>
        var $jscomp={scope:{}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)};$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.SYMBOL_PREFIX="jscomp_symbol_";
        $jscomp.initSymbol=function(){$jscomp.initSymbol=function(){};$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)};$jscomp.symbolCounter_=0;$jscomp.Symbol=function(a){return $jscomp.SYMBOL_PREFIX+(a||"")+$jscomp.symbolCounter_++};
        $jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var a=$jscomp.global.Symbol.iterator;a||(a=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator"));"function"!=typeof Array.prototype[a]&&$jscomp.defineProperty(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}});$jscomp.initSymbolIterator=function(){}};$jscomp.arrayIterator=function(a){var b=0;return $jscomp.iteratorPrototype(function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}})};
        $jscomp.iteratorPrototype=function(a){$jscomp.initSymbolIterator();a={next:a};a[$jscomp.global.Symbol.iterator]=function(){return this};return a};$jscomp.polyfill=function(a,b,c,d){if(b){c=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var f=a[d];f in c||(c[f]={});c=c[f]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:b})}};
        $jscomp.polyfill("Array.from",function(a){return a?a:function(a,c,d){$jscomp.initSymbolIterator();c=null!=c?c:function(a){return a};var b=[],e=a[Symbol.iterator];if("function"==typeof e)for(a=e.call(a);!(e=a.next()).done;)b.push(c.call(d,e.value));else for(var e=a.length,g=0;g<e;g++)b.push(c.call(d,a[g]));return b}},"es6-impl","es3");var MOUSE_EVENTS=["click","touchstart"],Carousel=function(a){this.element=a;this.init()};
        Carousel.prototype.init=function(){var a=this;this.items=Array.from(this.element.querySelectorAll(".carousel-item"));MOUSE_EVENTS.forEach(function(b){var c=a.element.querySelector(".carousel-nav-left"),d=a.element.querySelector(".carousel-nav-right");c&&c.addEventListener(b,function(b){b.preventDefault();a.move("previous");a.autoplayInterval&&(clearInterval(a.autoplayInterval),a.autoPlay(a.element.dataset.delay||5E3))},!1);d&&d.addEventListener(b,function(b){b.preventDefault();a.move("next");a.autoplayInterval&&
        (clearInterval(a.autoplayInterval),a.autoPlay(a.element.dataset.delay||5E3))},!1)});this.initOrder();this.element.dataset.autoplay&&"true"==this.element.dataset.autoplay&&this.autoPlay(this.element.dataset.delay||5E3)};Carousel.prototype.initOrder=function(){var a=this.element.querySelector(".carousel-item.is-active");(a=this.items.indexOf(a))?this.items.push(this.items.splice(0,a)):this.items.unshift(this.items.pop());this.setOrder()};
        Carousel.prototype.setOrder=function(){this.items.forEach(function(a,b){a.style["z-index"]=1!==b?"0":"1";a.style.order=b})};
        Carousel.prototype.move=function(a){a=void 0===a?"next":a;var b=this;this.items.length&&(this.element.querySelector(".carousel-item.is-active").classList.remove("is-active"),"previous"===a?(this.items.unshift(this.items.pop()),this.element.classList.add("is-reversing")):(this.items.push(this.items.shift()),this.element.classList.remove("is-reversing")),(1<=this.items.length?this.items[1]:this.items[0]).classList.add("is-active"),this.setOrder(),this.element.classList.toggle("carousel-animated"),setTimeout(function(){b.element.classList.toggle("carousel-animated")},
        50))};Carousel.prototype.autoPlay=function(a){var b=this;this.autoplayInterval=setInterval(function(){b.move("next")},void 0===a?5E3:a)};document.addEventListener("DOMContentLoaded",function(){var a=document.querySelectorAll(".carousel, .hero-carousel");[].forEach.call(a,function(a){new Carousel(a)})});

		</script>

@endsection