<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="title" :value="__('Title *')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="description" class="mt-4" :value="__('Description *')" />
                        <x-textarea name="description" id="description"/>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="attachment" class="mt-4" :value="__('Attachment')" />
                        <x-fileinput name="attachment" id="attachment" />
                        <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>