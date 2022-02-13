<template>
  <Link
    class="flex h-16 items-center px-4 hover:bg-green-100 lg:justify-center"
    :class="{
      'border-r-8 border-green-600 lg:border-r-0 lg:border-b-2': active,
    }"
  >
    <slot />
  </Link>
</template>

<script setup>
let props = defineProps({
  active: Boolean,
});
</script>

<style>
svg {
  margin-right: 0.5rem;
}
</style>
