<template>
    <section class="flex flex-wrap my-4 space-x-2">
        <template v-for="(link, index) in links" :key="index">
            <Component :is="link.url ? 'Link' : 'div'"
                       class=" py-2 px-4 border border-gray-200 hover:bg-gray-200 rounded text-gray-700"
                       :class="{ 'bg-gray-200': link.active }"
                       :href="link.url" v-html="link.label" />
        </template>
    </section>
</template>

<script setup>
defineProps({
    links: Object,
});
</script>
