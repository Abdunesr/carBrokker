<h1>hello Laeavel i am knowing you!</h1>
<p>My Name is {{ $name }} {{ $surname }}</p>
<P>Year :{{ $year }}</P>

<script>
    const hoobies={{ Illuminate\Support\js::from($hobbies) }}
    console.log(hoobies);
</script>
@foreach ([1,2] as $item)
{{ $loop->depth}}
  @foreach ([1,2] as $item)
   {{ $loop->depth }}  
   {{ $loop->parent->depth }} 
  @endforeach

@endforeach
@verbatim
<div>
    Name : {{ name  }}
    age : {{ age }}
   @if 
</div>
@endverbatim