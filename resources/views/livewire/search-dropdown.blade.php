<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search"
           type="text"
           class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
           placeholder="Search"
           @focus="isOpen=true"
           @keydown.escape.window="isOpen = false"
           @keydown.shift.tab="isOpen = false"
    >
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M179.907 317.89l63.63-63.63 17.675 17.676-63.63 63.63z" fill="#83a3ab"/><path d="M176.371 314.355l63.63-63.63 10.605 10.605-63.63 63.63zM66.192 403.381l-53.033 95.46c17.545 17.545 46.094 17.546 63.64 0l21.213-21.213z" fill="#93b7c0"/><path d="M34.373 413.988L13.16 435.201c-17.546 17.546-17.545 46.094 0 63.64l74.246-74.246z" fill="#acd5df"/><path d="M98.012 477.627L240.06 335.58l-31.82-31.82-92.237 49.811-49.811 92.237z" fill="#3a6fd8"/><path d="M34.335 413.954L176.36 271.93l31.815 31.815L66.15 445.769z" fill="#3b88f5"/><path d="M463.526 48.474l-175.539 58.513-58.513 175.539c64.632 64.632 169.421 64.632 234.052 0s64.632-169.42 0-234.052z" fill="#93b7c0"/><path d="M229.474 48.474c-64.632 64.632-64.632 169.421 0 234.052L463.526 48.474c-64.632-64.632-169.42-64.632-234.052 0z" fill="#acd5df"/><path d="M421.1 90.9l-111.9 37.3-37.3 111.9c41.2 41.2 107.999 41.2 149.2 0s41.2-107.999 0-149.2z" fill="#c4f3ff"/><path d="M271.9 90.9c-41.2 41.2-41.2 107.999 0 149.2L421.1 90.9c-41.201-41.2-107.999-41.2-149.2 0z" fill="#fff"/></svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            @if ($searchResults->count() > 0)
                <ul>
                    <li class="border-b border-gray-700">
                        @foreach($searchResults as $result)
                            <a
                                href="{{ route('movies.show', $result['id']) }}"
                                class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if($result['poster_path'])
                                    <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster">
                                    <span class="ml-4"> {{ $result['title'] }} </span>
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                @endif
                            </a>
                        @endforeach
                    </li>
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
