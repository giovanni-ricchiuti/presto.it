@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled me-2" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link pagination-li-disabled" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item me-2">
                    <a class="page-link pagination-li-active shadow" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link pagination-li-disabled">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link pagination-text pagination-li-disabled-size shadow" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item ms-2">
                    <a class="page-link pagination-li-active shadow" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled ms-2" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link pagination-li-disabled" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
