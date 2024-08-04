<section>
    <header style="position: relative;">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Change Cover
        </h2>

        <img style="
            position: absolute;
            right: -500px;
            top: 0px;
            width: 270px;
            aspect-radio: 16/9; 
            object-fit:cover;
            " class="rounded-md shadow" src="{{ "/storage/$user->cover" }}" alt="cover">
    </header>

    @if (session('message'))
        <div class="">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('profile.cover') }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div>
            <x-input-label for="name" value="Cover" />
            <x-text-input id="cover" name="cover" type="file" class="mt-1 block w-full" :value="old('cover', $user->cover)" autofocus autocomplete="cover" />
            <x-input-error class="mt-2" :messages="$errors->get('cover')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>

</section>
