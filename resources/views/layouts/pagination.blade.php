@if ($paginator->hasPages())

<div class="container row justify-content-center mt-5 ">
    <nav aria-label="Blog page navigation" class="row">


        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled mr-3 "><span class="fas fa-angle-double-left"></span></li>
            @else
            <li class="page-item mr-3 "> <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="first link"><span class="fas fa-angle-double-left"></span></a></li>
               
            @endif
            

            <div class="d-flex align-items-center justify-content-between">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class=" disabled " aria-disabled="true"><span>{{ $element }}</span></li>
            @endif
        

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class=" mr-3" aria-current="page"><span>
                       {{ $page }}
                        </span></li>
                    @else
                    <a href="{{ $url }}"> <li class=" page-link mr-3 active" >{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

            
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                  
                   <li class="page-item">
                       <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="first link" ><span class="fas fa-angle-double-right"></span></a>
                    </li>
                @else
                <li class="page-item disabled">
                   <span class="fas fa-angle-double-right"></span>
                </li>
            @endif
        </div>

        </ul>
        


    </nav>
   </div>


  
@endif



  
  