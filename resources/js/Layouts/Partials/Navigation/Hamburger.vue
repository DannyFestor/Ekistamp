<template>
    <button @click="$emit('toggle-nav')"
            class="fixed lg:hidden z-50 bottom-8 right-8 flex items-center space-x-2 focus:outline-none border rounded px-2 py-6 bg-white">

        <div class="w-8 flex items-center justify-center relative">
            <span :class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                  class="transform transition w-full h-px bg-current absolute"></span>

            <span :class="open ? 'opacity-0 translate-x-3' : 'opacity-100'"
                  class="transform transition w-full h-px bg-current absolute"></span>

            <span :class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                  class="transform transition w-full h-px bg-current absolute"></span>
        </div>
    </button>
</template>

<script setup>
defineProps({
    open: Boolean,
});
</script>
