<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Avatar Update
        </h2>

        <img style="width: 70px;height: 70px;object-fit:cover;" class="rounded-full" src="{{ "/storage/$user->avatar" }}" alt="Avatar">

    </header>

    @if (session('message'))
        <div class="">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('profile.avatar') }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div>
            <x-input-label for="name" value="Avatar" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
