<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-s text-gray-500 uppercase tracking-widest shadow-sm disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
