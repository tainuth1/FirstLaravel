<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-3 ">
            <h1 class="font-bold text-2xl">{{ $ticket->title }}</h1>
            <div class="p-2 sm:p-6 flex justify-between items-center gap-5 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="border-left: 10px solid #FAAD14;">
                <p style="width: 400px" class="">{{ $ticket->description }}</p>
                <p style="width: 200px">{{ $ticket->created_at->diffForHumans() }}</p>
                @if ($ticket->status == "Resolved")
                    <p class="w-[80px] text-center bg-[#4DB925] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                @endif
                @if ($ticket->status == "Open")
                    <p class="w-[80px] text-center bg-[#FAAD14] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                @endif
                @if ($ticket->status == "Rejected")
                    <p class="w-[80px] text-center bg-[#FF4D4F] rounded-md py-[2px] px-[5px] text-white">{{ $ticket->status }}</p>                   
                @endif
                <div class="flex gap-4 ">
                    <a href="{{ route('ticket.edit', $ticket->id) }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        Update 
                    </a>
                    <form action="{{ route('ticket.destroy', $ticket->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Delete
                        </button>
                    </form> 
                </div>
                @if (auth()->user()->isAdmin)
                    <div class="flex gap-4">
                        <form action="{{ route('ticket.update', $ticket->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="status" value="Rejected">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Reject
                            </button>
                        </form> 
                        <form action="{{ route('ticket.update', $ticket->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="status" value="Resolved">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Approve
                            </button>
                        </form> 
                    </div>
                @endif
            </div>
            <h1 class="font-medium text-lg">Attachment</h1>
            <div class="w-full h-[450px] bg-white shadow rounded-lg flex justify-center items-center">
                @if ($ticket->attachment)
                    <img src="{{ "/storage/".$ticket->attachment }}" alt="attac" class="h-full">                    
                @else
                    <p>This ticket doesn't have any ticket yet.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>