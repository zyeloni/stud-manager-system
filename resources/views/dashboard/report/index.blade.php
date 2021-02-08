<x-app-layout>
    <x-slot name="header">
       <div class="flex flex-wrap justify-between align-center content-around">
           <div class="md:w-1/2">
               <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
                   {{ __('Zgłoszenia') }}
               </h2>
               <a href="{{route('dashboard.report.index')}}" class="ml-4 bg-green-400 hover:bg-green-500 text-white font-bold py-1 px-4 rounded inline">Dodaj zgłoszenie</a>
           </div>
          <form class="flex justify-start mt-6 sm:mt-0 md:mt-0 lg:mt-0 xl:mt-0" method="GET" action="{{ route('dashboard.news') }}">
              <input name="search" class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded p-1 px-4 leading-tight focusoutline-none focus:bg-white focus:border-gray-500" id="nick" type="text" name="title_field" placeholder="Szukaj...">
              <button type="submit" class="ml-3 1/3 bg-orange-400 hover:bg-orange-500 text-white font-bold py-1 px-4 rounded">Szukaj</button>
          </form>
       </div>
    </x-slot>

    <div class="container mx-auto w-full h-full">
        <div class="relative wrap overflow-hidden p-10 h-full">

            @foreach($reports as $report)
                <div class="grid grid-cols-3">
                    haklo
                </div>
            @endforeach

        </div>
    </div>

    <script>
        $('.confirm').click(function (e){
            var confirm = window.confirm("Napewno chcesz usunąć zgłoszenie ?");
            if (confirm == true)
                return true;
            return false;
        });
    </script>
</x-app-layout>
