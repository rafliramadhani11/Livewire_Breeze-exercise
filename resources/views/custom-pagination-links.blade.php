<div class="py-3">
    @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <span>
            @if ($paginator->onFirstPage())
            <span class="hidden">Previous</span>
            @else
            <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="px-10 py-2 leading-8 text-center text-gray-900 rounded-md text-md bg-gray-50 focus:ring-gray-800 focus:border-gray-800 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-800">Previous</button>
            @endif
        </span>
        <span>
            @if ($paginator->onLastPage())
            <span class="hidden">Next</span>
            @else
            <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="px-10 py-2 leading-8 text-center text-gray-900 rounded-md text-md bg-gray-50 focus:ring-gray-800 focus:border-gray-800 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-800">Next</button>
            @endif
        </span>
    </nav>
    @endif
</div>
