<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                User List 
                            </h2>
                        </header>
                    </section>

                   <div class="flex flex-col gap-3">
                    @foreach ($users as $user)
                        <a href="{{ route('user.detail', $user->id) }}" class="flex justify-between items-center p-4 rounded-lg shadow-lg bg-[#f2f5f5]">
                            <img style="width: 50px;height: 50px;object-fit:cover;" class="rounded-lg" src="{{ "/storage/$user->avatar" }}" alt="Avatar">
                            <p class="font-medium">{{ $user->name }}</p>
                            <p class="">{{ $user->email }}</p>
                            <p class="">{{ $user->created_at->diffForHumans() }}</p>
                        </a>
                    @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>