@props(['titel'=>'','bodyClass'=>'','FooterLinks'=>''])
<x-base-layout :$titel :$bodyClass>
 <x-layouts.header />
  {{ $slot }}

  <footer>
     <a href="#"> Link 1</a><a href="#"> Link 2</a>
     {{ $FooterLinks }} 
     
     
  </footer>

</x-base-layout>
   













