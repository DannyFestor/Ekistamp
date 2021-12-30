<template>
    <Head :title="station.name" />

    <section>
        Station
        <div v-text="station.name"></div>
        <div v-text="station.romaji"></div>
    </section>
</template>

<script setup>
let props = defineProps({
    station: Object,
});
</script>
