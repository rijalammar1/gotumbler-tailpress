<form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="sr-only"><?php esc_html_e('Search for:', 'tailpress'); ?></label>
    <input
        type="search"
        id="search-field"
        class="w-full rounded-full border border-gray-300 pl-4 pr-10 py-2 text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:border-emerald-500"
        placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'tailpress'); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
    >
    <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-emerald-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" />
        </svg>
    </button>
</form>