<div class="pagination-cover">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-item item-prev disabled">
                <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </li>
        @else
            <li class="pagination-item item-prev">
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item disabled">
                    <span>{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-item active">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @else
                        <li class="pagination-item">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-item item-next">
                <a href="{{ $paginator->nextPageUrl() }}">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </li>
        @else
            <li class="pagination-item item-next disabled">
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        @endif
    </ul>
</div>
