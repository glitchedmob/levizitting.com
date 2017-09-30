@if ($paginator->hasPages())
    <ul class="pagination center-align">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pagination-arrow"><i class="material-icons">chevron_left</i></li>
        @else
            <li class="pagination-arrow"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="material-icons">chevron_left</i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active teal lighten-2"><a href="#!">{{ $page }}</a></li>
                    @else
                        <li class="waves-effect" ><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-arrow"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="material-icons">chevron_right</i></a></li>
        @else
            <li class="disabled pagination-arrow"><i class="material-icons">chevron_right</i></li>
        @endif
    </ul>
@endif
