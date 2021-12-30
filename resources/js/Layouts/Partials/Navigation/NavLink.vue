<template>
    <Link class="hover:bg-green-100 px-4 flex items-center lg:justify-center h-16"
          :class="{ 'border-r-8 lg:border-r-0 lg:border-b-2 border-green-600': active }"
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

<style>
svg {
    margin-right: 0.5rem;
}
</style>
