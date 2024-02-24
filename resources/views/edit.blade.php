
<div class="bg-gray-900">
  @extends('layout.layout')
  @section('content')
  <div class="mt-10 flex items-center justify-center gap-x-6 ">  
    <div class="w-full max-w-xs">
      <form class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/edit/{{$post->id}}" method="POST">
          @csrf
          @method('put')
          <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 ">Edit Menu</h1>
          </div><br>
          <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
          </label>
          <input value="{{$post->name}}" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name">
        </div>

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
            Type
          </label>
          <input value="{{$post->type}}" name="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type">
        </div>
        @error('type')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Update
          </button>
          <a href="/store" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Return to Menu</a>
        </div>
      </form>  
    </div>
  </div>  
</div>
@endsection