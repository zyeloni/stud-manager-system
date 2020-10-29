<x-app-layout>
    <x-slot name="header">
       <div class="flex flex-wrap justify-between align-center content-around">
           <div class="md:w-1/2">
               <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
                   {{ __('Ogłoszenia') }}
               </h2>
               <a href="{{route('dashboard.news.create')}}" class="ml-4 bg-green-400 hover:bg-green-500 text-white font-bold py-1 px-4 rounded inline">Dodaj ogłoszenie</a>
           </div>
          <form class="flex justify-start mt-6 sm:mt-0 md:mt-0 lg:mt-0 xl:mt-0" method="GET" action="{{ route('dashboard.news') }}">
              <input name="search" class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded p-1 px-4 leading-tight focusoutline-none focus:bg-white focus:border-gray-500" id="nick" type="text" name="title_field" placeholder="Szukaj...">
              <button type="submit" class="ml-3 1/3 bg-orange-400 hover:bg-orange-500 text-white font-bold py-1 px-4 rounded">Szukaj</button>
          </form>

       </div>
    </x-slot>

    <div class="container mx-auto w-full h-full">
        <div class="relative wrap overflow-hidden p-10 h-full">

            @foreach($news as $item)
                @if($item->pinned)
                    <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 bg-red-400 rounded-lg shadow-xl w-full px-6 py-4">
                            <h3 class="mb-1 font-bold text-white text-xl">
                                {{ $item->title }}
                            </h3>
                            <p class="mb-3 font-bold text-red-300 underline">Utworzone: {{ $item->created_at }}</p>
                            <p class="text-sm leading-snug tracking-wide text-white text-opacity-100">
                                {!! $item->content !!}
                            </p>
                            <p class="mt-3 text-sm">
                                <a class="confirm text-teal-900 hover:text-teal-500 hover:underline" href="{{ route("dashboard.news.delete", ['id'=>$item->id]) }}">Usuń</a>
                                <a class="ml-5 text-teal-900 hover:text-teal-500 hover:underline" href="{{ route("dashboard.news.update", ['id'=>$item->id]) }}">Edytuj</a>
                            </p>
                        </div>
                    </div>
                @else
                    <div class="mb-8 flex justify-between items-center w-full right-timeline">
                        <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-full px-6 py-4">
                            <h3 class="mb-1 font-bold text-white text-xl">
                                {{ $item->title }}
                            </h3>
                            <p class="mb-3 text-sm font-bold text-gray-300 underline">Utworzone: {{ $item->created_at }}</p>
                            <p class="text-sm leading-snug tracking-wide text-white text-opacity-100">
                                {!! $item->content !!}
                            </p>
                            <p class="mt-3 text-sm">
                                <a class="confirm text-teal-900 hover:text-teal-500 hover:underline" href="{{ route("dashboard.news.delete", ['id'=>$item->id]) }}">Usuń</a>
                                <a class="ml-5 text-teal-900 hover:text-teal-500 hover:underline" href="{{ route("dashboard.news.update", ['id'=>$item->id]) }}">Edytuj</a>
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>
        $('.confirm').click(function (e){
            var confirm = window.confirm("Napewno chcesz usunąć ogłoszenie ?");
            if (confirm == true)
                return true;
            return false;
        });
    </script>
</x-app-layout>
