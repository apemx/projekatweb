@props(['paginationData'])
<div class="custom-pagination">
    @if ($paginationData->lastPage() > 1)
        <ul class="pagination flex space-x-2">
            @if ($paginationData->currentPage() > 1)
                <li class="page-item">
                    <a class="page-link bg-success hover:hover-darken-10 text-primary py-2 px-4 rounded" href="{{ $paginationData->url($paginationData->currentPage() - 1) }}">Previous</a>
                </li>
            @endif

            @for ($i = 1; $i <= $paginationData->lastPage(); $i++)
                <li class="page-item">
                    <a 
                    class="page-link 
                        @if ($i == $paginationData->currentPage())
                            bg-dark text-primary
                        @else
                            bg-light shadow-lg  hover:bg-dark hover:text-primary
                        @endif
                        py-2 px-4 rounded" 
                    href="{{ $paginationData->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if ($paginationData->currentPage() < $paginationData->lastPage())
                <li class="page-item">
                    <a class="page-link bg-success hover:hover-darken-10 text-primary py-2 px-4 rounded" href="{{ $paginationData->url($paginationData->currentPage() + 1) }}">Next</a>
                </li>
            @endif
        </ul>
    @endif
</div>