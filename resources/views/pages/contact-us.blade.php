@extends('layouts.base')

@section('content')

                    
<section class="section">
    <div class="container">
    
      <form class="box box-fix "  action="{{ route('contact-us') }}" method="POST">
        @csrf
        
      <div class="service-title m-5">
        <p class="title">Contact Us</p>
    </div>

      <div class="field is-horizontal">
        
        <div class="field-body">
          <div class="field control">
            <input type="text" class="input" placeholder="First Name" required>
          </div>
          <div class="field control">
            <input type="text" class="input" placeholder="Last Name" required>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        
        <div class="field-body">
          <div class="field control">
            <input type="email" class="input" placeholder="Your Email" required>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
       
        <div class="field-body">
          <div class="field control">
            <input type="tel" class="input" placeholder="Your Phone Number" required>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
       
        <div class="field-body">
          <div class="field is-narrow">
            <div class="control">
              <div class="select is-fullwidth control">
                <select>
                  <option>Branding Service</option>
                  <option>Website Service</option>
                  <option>CCTV Service</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
       
        <div class="field-body">
          <div class="field">
            <div class="control mb-2">
              <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
       
        <div class="field-body">
          <div class="field">
            <div class="control mb-6">
              <button class="button is-primary ">
                Send message
              </button>
            </div>
          </div>
        </div>
      </div>

      </form>
    </div>
  </section>      

@endsection