@if ($paginator->hasPages())
   <div class="pagination-style text-center">
                                    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><a class="prev"><i class="la la-angle-left"></i></a></li>
            
        @else
            <li><a class="prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="la la-angle-left"></i></a></li>
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
                        <li><a class="active" >0{{ $page }}</a></li>
                        
                    @else
                        <li><a href="{{ $url }}" >0{{ $page }}</a></li>
                        
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
         @if ($paginator->onFirstPage())
            <li><a class="next"><i class="la la-angle-right"></i></a></li>
            
        @else
            <li><a class="next" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="la la-angle-right"></i></a></li>
        @endif
    </ul>
                                </div>
@endif
