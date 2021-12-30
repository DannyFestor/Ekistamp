<template>
    <Head title="Stations" />
    <section class="flex flex-wrap">
        <Breadcrump>
            駅一覧 Stations
        </Breadcrump>
    </section>

    <section class="flex flex-col space-y-2 mb-4" id="search">
        <div class="flex flex-wrap items-center">
            <label class="w-full w-24" for="station_name">Station: </label>
            <input v-model="stationName"
                   class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                   id="station_name"
                   name="station_name"
                   type="text" />
        </div>
        <div class="flex flex-wrap items-center">
            <label class="w-full w-24" for="prefecture_name">Prefecture: </label>
            <input v-model="prefectureName"
                   class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                   id="prefecture_name"
                   name="prefecture_name"
                   type="text" />
        </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
        <div @click="open(station.id)"
             v-for="station in stations.data"
             :key="station.id"
             class="flex flex-col p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <section class="flex flex-wrap justify-between items-center">
                <div class="break-all">
                    <ruby>
                        <span class="text-xl text-green-700" v-text="station.name"></span>
                        <rp>(</rp>
                        <rt><span v-text="station.hiragana"></span></rt>
                        <rp>)</rp>
                        駅
                    </ruby>
                    <div v-text="station.romaji" class="capitalize"></div>
                </div>
                <div>
                    <ruby>
                        <span class="text-sm text-green-700" v-text="station.prefecture.name"></span>
                        <rp>(</rp>
                        <rt><span v-text="station.prefecture.hiragana"></span></rt>
                        <rp>)</rp>
                    </ruby>
                    <div v-text="station.prefecture.romaji" class="text-sm capitalize"></div>
                </div>
            </section>

            <section class="mt-4">
                <div class="flex justify-between">
                    <div>路線数 <span class="text-xs">Lines</span>:</div>
                    <div v-text="station.lines_count"></div>
                </div>

                <div class="flex justify-between">
                    <div>スタンプ数 <span class="text-xs">Stamps</span>:</div>
                    <div v-text="station.stamps_count"></div>
                </div>
            </section>
        </div>
    </section>

    <Pagination :links="stations.links" />
</template>

<script setup>
import {ref, watch} from 'vue';
import {debounce} from 'lodash';
import {Inertia} from '@inertiajs/inertia';

import Pagination from '../../Shared/Pagination';
import Breadcrump from '../../Shared/Breadcrump';

let props = defineProps({
    stations: Object,
    filters: Object,
});

let stationName = ref(props.filters.station);
let prefectureName = ref(props.filters.prefecture);

watch(
    [stationName, prefectureName],
    debounce(function(values) {
        Inertia.get(route('stations.index'), {
                'station': values[0],
                'prefecture': values[1],
            },
            {
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    console.log(prefectureName);
    Inertia.get(route('stations.show', {'station': id, _query: {'prefecture': prefectureName.value, 'station': stationName.value}}));
};
</script>
