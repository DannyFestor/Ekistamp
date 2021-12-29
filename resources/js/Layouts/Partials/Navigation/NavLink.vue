<template>
    <Link class="hover:bg-green-100 px-4 flex items-center justify-center"
          :class="{ 'border-b-2 border-green-600': active }"
    >
        <slot />
    </Link>
</template>

<script setup>
let props = defineProps({
        active: Boolean,
    },
);
</script>
