<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <form wire:submit="search">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                Search
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3.5">
                    <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" wire:model="query" class="block w-1/3 p-3 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-gray-800 focus:border-gray-800 dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-800" placeholder="Search Name or Email ..." autofocus>
            </div>
        </form>
    </div>

    <!-- USERS TABLE -->
    <div class="py-5 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-x-auto overflow-y-hidden">
            <table id="usersTable" class="min-w-full text-sm text-left bg-white divide-y-2 divide-gray-200 rounded-md shadow-sm dark:divide-gray-700 dark:bg-gray-800">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Name</th>
                        <th class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Job Title</th>
                        <th class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Address
                        </th>
                        <th class="px-10 py-4"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($users as $user)
                    <livewire:user-list :$user :key="$user->id" />
                    @empty
                    <tr>
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            User not found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div>
            {{ $users->links('custom-pagination-links') }}
        </div>
    </div>
    <!-- ---------------------------------- -->
    @script
    <script>
        $wire.on('delete:confirm', (event) => {
            const words = event.userName.trim().split(' ');
            const firstTwoWords = words.slice(0, 2).join(' ');
            Swal.fire({
                    title: `${firstTwoWords} will be delete`,
                    text: "Are u sure want to delete this user ?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    allowEscapeKey: false
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        $wire.deleteUser(event.userId)
                        Swal.fire({
                            title: "User has been deleted ",
                            icon: "success",
                            timer: 1000,
                            showConfirmButton: false,
                            allowEscapeKey: false
                        });
                    }
                })
        })
    </script>
    @endscript
</div>
