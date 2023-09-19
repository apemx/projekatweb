@props(['value' => 'button', 'label' => '', 'route' => '#', 'id' ])

<button data-modal-target="{{ $id }}" data-modal-toggle="{{ $id }}" {{ $attributes->merge(['class' => 'btn']) }} type="button">
    {{ $value }}
</button>

<div id="{{ $id }}" tabindex="-1" aria-hidden="true" class="fixed inset-0 flex items-center justify-center z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 max-h-full bg-gray-900 bg-opacity-50">
    <div class="relative w-full max-w-md">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 sm:max-w-sm md:max-w-md lg:max-w-lg">
            <button type="button" class="button--close" data-modal-hide="{{ $id }}">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-center text-gray-900 dark:text-white">{{ $label }}</h3>
                <form class="space-y-2 flex items-center justify-center flex-col max-sm:text-xs space-y-2" action="{{ $route }}" method="POST">
                    {{ $slot }}
                </form>
            </div>
        </div>

    </div>
</div>
