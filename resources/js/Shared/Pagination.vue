<template>
    <section class="flex flex-wrap my-4 space-x-2">
        <template v-for="(link, index) in links" :key="index">
            <Link v-if="link.url"
                  class="py-2 px-4 border border-gray-200 hover:bg-gray-200 rounded text-gray-700"
                  :class="{ 'bg-gray-200': link.active }"
                  :href="link.url" v-html="link.label" />
            <div v-else
                 class="py-2 px-4 border border-gray-200 hover:bg-gray-200 rounded text-gray-400 cursor-not-allowed"
                 v-html="link.label" />
        </template>
    </section>
</template>

<script setup>
defineProps({
    links: Object,
});
</script>
