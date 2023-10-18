@if($paginator->hasPages())
<ul class="pagination w-100 mt-4 wow fadeInUp" data-wow-duration="1s">
    @if($paginator->onFirstPage())
    <li class="page-item "><a class="page-link btn disabled" href="{{$paginator->previousPageUrl()}}">
    <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z"></path>
    </svg></a></li>
    @else
        <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}">
                <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z"></path>
        </svg></a></li>
    @endif
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"></li>
                        <li class="page-item active"><span class="page-link">{{ $page }}</span> </li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                    @endif
                @endforeach
            @endif
        @endforeach




    @if($paginator->hasMorePages())
    <li class="page-item "><a class="page-link " href="{{$paginator->nextPageUrl()}}">
    <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z"> </path>
    </svg></a></li>
    @else
            <li class="page-item "><a class="page-link btn disabled" href="{{$paginator->nextPageUrl()}}">
                    <svg width="16" height="12" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.27438 5.58083L9.89199 0.963231C10.0396 0.810363 10.0354 0.566767 9.88252 0.41913C9.73339 0.2751 9.49699 0.2751 9.34789 0.41913L5.00233 4.76468L0.656779 0.41913C0.506526 0.2689 0.262929 0.2689 0.112677 0.41913C-0.0375528 0.569405 -0.0375529 0.812978 0.112677 0.963231L4.73028 5.58083C4.88056 5.73106 5.12413 5.73106 5.27438 5.58083Z"> </path>
                    </svg></a>
            </li>
    @endif
</ul>

@endif
