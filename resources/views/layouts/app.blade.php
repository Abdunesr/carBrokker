@props(['titel'=>'','bodyClass'=>'','FooterLinks'=>''])
<x-base-layout :$titel :$bodyClass>
 <x-layouts.header />
  {{ $slot }}

  

</x-base-layout>
   













