<tr>
    <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <div class="text-base font-semibold">
            {{ $user->name }}
        </div>
        <div class="font-normal text-gray-500">
            {{ $user->email }}
        </div>
    </td>
    <td class="px-10 py-4 text-gray-700 whitespace-nowrap dark:text-gray-200">
        {{ str($user->job)->words(2) }}
    </td>
    <td class="px-10 py-4 text-gray-700 whitespace-nowrap dark:text-gray-200">
        {{ str($user->address)->words(5) }}
    </td>
    <td class="px-10 py-4 whitespace-nowrap">
        <span class="inline-flex -space-x-px overflow-hidden bg-white border rounded-md shadow-sm dark:border-gray-800 dark:bg-gray-700">
            <button class="inline-block px-4 py-2 text-sm font-medium text-blue-700 hover:bg-blue-50 focus:relative dark:text-blue-500 dark:hover:bg-blue-900 dark:hover:text-blue-100">
                View
            </button>
            <button wire:click="$parent.deleteConfirm({{ $user->id }})" class="inline-block px-4 py-2 text-sm font-medium text-red-700 hover:bg-red-50 focus:relative dark:text-red-500 dark:hover:bg-red-900 dark:hover:text-red-100" type="button">
                Delete
            </button>
        </span>
    </td>
</tr>
