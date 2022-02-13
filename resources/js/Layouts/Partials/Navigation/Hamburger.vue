<template>
  <button
    @click="$emit('toggle-nav')"
    class="fixed bottom-8 right-8 z-50 flex items-center space-x-2 rounded border bg-white px-2 py-6 focus:outline-none lg:hidden"
  >
    <div class="relative flex w-8 items-center justify-center">
      <span
        :class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'"
        class="absolute h-px w-full transform bg-current transition"
      ></span>

      <span
        :class="open ? 'translate-x-3 opacity-0' : 'opacity-100'"
        class="absolute h-px w-full transform bg-current transition"
      ></span>

      <span
        :class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
        class="absolute h-px w-full transform bg-current transition"
      ></span>
    </div>
  </button>
</template>

<script setup>
defineProps({
  open: Boolean,
});
</script>
