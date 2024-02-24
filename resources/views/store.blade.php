<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  @extends('layout.layout')
  @section('content')
  {{-- Message --}}
  <div style="margin-left: 30%; margin-right: 30%;">
    @if (session()->has('status'))
      <div class="text-white ml-20 mr-20 p-4 bg-green-500 text-center rounded">
        {{session()->get('status')}}
      </div>
    @endif
    {{-- Delete Message --}}
    @if (session()->has('delete'))
      <div class="text-white ml-20 mr-20 p-4 bg-red-500 text-center rounded">
        {{session()->get('delete')}}
      </div>
    @endif
    {{-- Update Message --}}
    @if (session()->has('update'))
      <div class="text-white ml-20 mr-20 p-4 bg-green-500 text-center rounded">
        {{session()->get('update')}}
      </div>
    @endif
  </div><br><br> 

  <div class="container mx-auto">
    <h2 class="text-yellow-500 text-3xl text-center"><b>Menu</b></h2>
    <ul role="list" class="divide-y divide-gray-100" style="padding-left: 30px">
        @foreach($restaurants as $restaurant)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                  <div class="min-w-0 flex-auto">
                    <p class="text-1xl font-semibold leading-6 text-white">{{ $restaurant->name}}</p>
                    <p class="text-2xl mt-1 truncate text-xs leading-5 text-white">{{ $restaurant->type }}</p>     
                  </div>
                  <div class="sm:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2">
                      <p class="text-sm leading-6 text-gray-900"></p>
                      <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/edit/{{$restaurant->id}}" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
                        <form action="/delete/{{$restaurant->id}}" method="Post">
                          @csrf
                          @method('DELETE')
                          <button class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><p>Delete</p></button>                       
                        </form>
                      </div>
                    </div>
                  </div>  
                </div>
              <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900"></p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                  <a href="/edit/{{$restaurant->id}}" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
                  <form action="/delete/{{$restaurant->id}}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><p>Delete</p></button>                      
                  </form>
                </div>
              </div>
            </li>
        @endforeach
    </ul>
  </div>  
</body>
</html>
@endsection