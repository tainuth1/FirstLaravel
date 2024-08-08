<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('ticket.update', $ticket->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('Title *')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $ticket->title }}" autofocus autocomplete="off" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Description *')" />
                        <x-textarea name="description" id="description" value="{{ $ticket->description }}" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div>
                        @if ($ticket->attachment)
                            <a href="{{ "/storage/".$ticket->attachment }}" target="_blank" class="underline">See Attachment</a>
                        @endif
                        <x-input-label for="attachment" :value="__('Attachment')" />
                        <x-fileinput name="attachment" id="attachment" value="{{ $ticket->attachment }}"/>
                        <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>