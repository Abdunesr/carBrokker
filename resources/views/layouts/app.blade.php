@props(['titel'=>'','bodyClass'=>''])
<x-base-layout :$titel :$bodyClass>
  @include('partials.header')

  {{ $slot }}

  <footer>
     @section('footerLinks')
     <a href="#"> Link 1</a>
       <a href="#"> Link 2</a>
       @show
     
  </footer>

</x-base-layout>
   













