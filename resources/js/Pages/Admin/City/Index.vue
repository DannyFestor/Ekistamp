<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            市町村郡一覧 Cities
        </Breadcrump>
    </section>

    <section class="flex justify-end my-4">
        <Link :href="route('admin.cities.create', { _query: {city: cityName, prefecture: prefectureId }})"
              class="rounded px-4 py-2 bg-green-700 hover:bg-green-500 text-white">
            New City
        </Link>
    </section>

    <section class="flex mb-4">
        <section class="flex flex-col flex-1 space-y-2" id="search">
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="city_name">Prefecture: </label>
                <select v-model.number="prefectureId"
                        class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded capitalize"
                        id="prefecture_id"
                        name="prefecture_id"
                        type="text">
                    <option :value="0">---</option>
                    <option v-for="prefecture in prefectures"
                            :key="prefecture.id"
                            :value="prefecture.id"
                    >{{ prefecture.name }} - {{ prefecture.romaji }}
                    </option>
                </select>
            </div>
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="city_name">City: </label>
                <input v-model="cityName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="city_name"
                       name="city_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(city.id)"
             v-for="city in cities.data"
             :key="city.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ city.prefecture.name }} {{ city.prefecture.romaji }}</div>
            <div class="text-xl text-green-700">{{ city.name }}</div>
            <div class="text-xl text-green-700">{{ city.hiragana }}</div>
            <div class="text-xl text-green-700">{{ city.katakana }}</div>
            <div class="text-xl text-green-700 capitalize">{{ city.romaji }}</div>
        </div>
    </section>

    <Pagination :links="cities.links" />
</template>

<script>
import Admin from '@/Layouts/Admin';

export default {
    layout: Admin,
};
</script>

<script setup>
import Breadcrump from '../../../Shared/Breadcrump';
import Pagination from '../../../Shared/Pagination';
import {ref, watch} from 'vue';
import {debounce} from 'lodash';
import {Inertia} from '@inertiajs/inertia';

let props = defineProps({
    cities: Object,
    prefectures: Object,
    filters: Object,
});

let cityName = ref(props.filters.city);
let prefectureId = ref(props.filters.prefecture);

watch(
    [cityName, prefectureId],
    debounce(function(values) {
        Inertia.get(route('admin.cities.index'), {
                'city': values[0],
                'prefecture': values[1],
            },
            {
                only: ['cities'],
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(
        route('admin.cities.edit', {
            'city': id,
            _query: {
                prefecture: prefectureId.value,
                city: cityName.value,
            },
        }),
    );
};

let clearForm = () => {
    prefectureId.value = 0;
    cityName.value = null;
};
</script>
