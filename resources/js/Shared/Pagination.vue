<template>
  <section class="my-4 flex flex-wrap space-x-2">
    <template v-for="(link, index) in links" :key="index">
      <Component
        :is="link.url ? 'Link' : 'div'"
        class="rounded border border-gray-200 py-2 px-4 text-gray-700 hover:bg-gray-200"
        :class="{ 'bg-gray-200': link.active }"
        :href="link.url"
        v-html="link.label"
      />
    </template>
  </section>
</template>

<script setup>
defineProps({
  links: Object,
});
</script>
