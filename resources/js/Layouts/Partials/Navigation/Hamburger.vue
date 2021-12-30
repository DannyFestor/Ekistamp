<template>
    <button @click="open = !open"
            class="fixed z-50 bottom-8 right-8 flex items-center space-x-2 focus:outline-none border rounded p-2 bg-white">
            <span v-text="open ? 'Close' : 'Open'"
                  class="font-medium text-lg">
            </span>

        <div class="w-6 flex items-center justify-center relative">
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
import {ref} from 'vue';

let open = ref(false);

let toggleOpen = (e) => {
    console.log(e);
};
</script>
