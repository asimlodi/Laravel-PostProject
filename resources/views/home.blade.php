@extends('layouts.app')


@section('content')

<div class="flex justify-center">
        <div class="w-8/12 bg-gray-900 p-6 rounded-lg">
        <figure class="bg-orange-500 rounded-lg p-8">
  <img class="w-40 h-40 rounded-full mx-auto" src="/img/bus.jpg"
 alt="" width="600" height="600">
  <div class="pt-6 space-y-4">
    <blockquote>
      <p class="text-lm font-semib text-white ">
        “Tailwind CSS is the only framework that I've seen scale
        on large teams. It’s easy to customize, adapts to any design,
        and the build size is tiny.”
      </p>
    </blockquote>
    <figcaption>
      <div>
        Ashim Ali khan
      </div>
      <div>
        Software Engineer, Noida 
      </div>
    </figcaption>
  </div>
</figure>
          <div class="text-center mt-2 border-bottom-2">Home</div>
            
        </div>
</div>

@endsection