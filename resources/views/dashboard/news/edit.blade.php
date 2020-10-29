<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ogłoszenia') }}
        </h2>
    </x-slot>

    <div class="container mx-auto w-full h-full">
        <div class="relative wrap overflow-hidden p-10 h-full">
            <form class="w-full" method="POST" action="{{route("dashboard.news.update_store")}}">
                @csrf
                <input type="hidden" name="id" value="{{ $edit_news->id }}">

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Tytuł ogłoszenia
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nick" type="text" name="title_field" value="{{ $edit_news->title }}" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Treść ogłoszenia
                        </label>
                        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border order-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="content_field" rows="200" required>{{$edit_news->content}}</textarea>
                    </div>
                    <div class="w-full px-3">
                        <label class="md:w-2/3 block text-gray-500 font-bold">
                            <input class="mr-2 leading-tight" type="checkbox" name="pinned_field" {{ $edit_news->pinned ? "checked" : "" }}>
                            <span class="text-sm">
                                Przypiąć ogłoszenie?
                            </span>
                        </label>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Aktualizuj ogłoszenie
                        </button>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            language: 'pl',
        });
    </script>
</x-app-layout>
