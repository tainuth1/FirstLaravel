<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <div class="w-full flex justify-between items-center">
                <h1 class="font-bold text-2xl">Support Ticket</h1>
                <a href="{{ route('ticket.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Create Ticket</a>   
            </div>
            @forelse ($tickets as $ticket)
                <div class="p-2 sm:p-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="border-left: 10px solid #FAAD14;">
                    <a style="width: 300px" class="underline" href="{{ route('ticket.show', $ticket->id) }}">{{ $ticket->title }}</a>
                    @if ($ticket->status == "Resolved")
                        <p class="w-[80px] text-center bg-[#4DB925] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                    @endif
                    @if ($ticket->status == "Open")
                        <p class="w-[80px] text-center bg-[#FAAD14] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                    @endif
                    @if ($ticket->status == "Rejected")
                        <p class="w-[80px] text-center bg-[#FF4D4F] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                    @endif
                    <p style="width: 300px">{{ $ticket->created_at->diffForHumans() }}</p>
                </div>
            @empty
                <div class="p-2 sm:p-6 flex justify-between items-center bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <p>You don't have any support ticket.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>