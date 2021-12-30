<template>
    <Head :title="station.name" />

    <section>
        <Link :href="route('stations.index', { prefecture: filters.prefecture, station: filters.station })" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
            </svg>
            駅一覧 Stations
        </Link>
    </section>

    <section>
        Station
        <div v-text="station.name"></div>
        <div v-text="station.romaji"></div>
    </section>
</template>

<script setup>
let props = defineProps({
    station: Object,
    filters: Object,
});
</script>
