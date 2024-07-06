@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-center">
        <div class="d-flex justify-content-center flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item bg-transparent" aria-disabled="true">
                        <span class="page-link bg-transparent ColorThree">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item bg-transparent ">
                        <a class="page-link bg-transparent ColorThree" href="{{ $paginator->previousPageUrl() }}"
                            rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item bg-transparent">
                        <a class="page-link bg-transparent" href="{{ $paginator->nextPageUrl() }}"
                            rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item bg-transparent" aria-disabled="true">
                        <span class="page-link bg-transparent">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center flex-column-reverse justify-content-sm-center">
            <div>
                <p class=" varela ColorThree">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled  " aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link bg-transparent border-0 ColorThree" aria-hidden="true"><i
                                    class="fa-solid fa-chevron-left"></i></span>
                        </li>
                    @else
                        <li class="page-item bg-transparent ">
                            <a class="page-link bg-transparent border-0 ColorThree " href="{{ $paginator->previousPageUrl() }}"
                                rel="prev" aria-label="@lang('pagination.previous')"><i
                                    class="fa-solid fa-chevron-left"></i></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span
                                            class="page-link border-circle border-3 rounded-circle mx-1 varela fw-semibold bgColorThree shadowcard ">{{ $page }}</span></li>
                                @else
                                    <li class="page-item  "><a class="page-link rounded-circle bg-transparent mx-1 varela fw-semibold border-circle border-3 ColorThree "
                                            href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item ">
                            <a class="page-link bg-transparent border-0 ColorThree" href="{{ $paginator->nextPageUrl() }}"
                                rel="next" aria-label="@lang('pagination.next')"><i
                                    class="fa-solid fa-chevron-right bg-transparent border-0 ColorThree"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled " aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link bg-transparent border-0 ColorThree " aria-hidden="true"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
