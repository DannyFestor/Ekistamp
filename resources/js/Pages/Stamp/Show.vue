<template>
    <Head :title="stamp.name" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('stations.index', { prefecture: filters.prefecture, station: filters.station })"
        >
            駅一覧 Stations
        </Breadcrump>
        <Breadcrump
            :href="route('stations.show', { station: station.id, _query: { prefecture: filters.prefecture, station: filters.station } })"
        >
            {{ station.name }}
            {{ station.romaji }}
        </Breadcrump>
        <Breadcrump>
            {{ stamp.name }}
            {{ stamp.name_eng }}
        </Breadcrump>
    </section>
</template>

<script setup>
import Breadcrump from '../../Shared/Breadcrump';

defineProps({
    station: Object,
    stamp: Object,
    filters: Object,
});
</script>
