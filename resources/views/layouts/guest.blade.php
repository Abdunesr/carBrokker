
@props(['bodyClass'=>'','titel'=>'' ])
<x-base-layout :bodyClass=$bodyClass :titel=$titel >

    <main>
      <div class="container-small page-login">
        <div class="flex" style="gap: 5rem">
          <div class="auth-page-form">
            <div class="text-center">
              <a href="/">
                <img src="/img/logoipsum-265.svg" alt="" />
              </a>
            </div>
           {{ $slot }}
           <div class="grid grid-cols-2 gap-1 social-auth-buttons">
      
            <x-googlebutton/>
            <x-facebookbutton/>
          </div>
          <div class="login-text-dont-have-account">
           {{ $FooterLink }}
          </div>
          </div>
          <div class="auth-page-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
    </main>
  </x-base-layout>
  
  
  
  
  

  