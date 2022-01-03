<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            Streets
        </Breadcrump>
    </section>

    <section class="flex justify-end my-4">
        <Link :href="route('admin.streets.create', { _query: {street: streetName, city: cityId, prefecture: prefectureId }})"
              class="rounded px-4 py-2 bg-green-700 hover:bg-green-500 text-white">
                    New Street
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
                <select v-model.number="cityId"
                        class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded capitalize"
                        id="city_id"
                        name="city_id"
                        type="text">
                    <option :value="0">---</option>
                    <option v-for="city in cities"
                            :key="city.id"
                            :value="city.id"
                    >{{ city.name }} - {{ city.romaji }}
                    </option>
                </select>
            </div>
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="city_name">Street: </label>
                <input v-model="streetName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="city_name"
                       name="city_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(street.id)"
             v-for="street in streets.data"
             :key="street.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ street.prefecture.name }} {{ street.prefecture.romaji }}</div>
            <div class="text-xl text-green-700">{{ street.city.name }} {{ street.city.romaji }}</div>
            <div class="text-xl text-green-700">{{ street.name }}</div>
            <div class="text-xl text-green-700">{{ street.hiragana }}</div>
            <div class="text-xl text-green-700">{{ street.katakana }}</div>
            <div class="text-xl text-green-700 capitalize">{{ street.romaji }}</div>
        </div>
    </section>

    <Pagination :links="streets.links" />
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
    streets: Object,
    prefectures: Object,
    cities: Object,
    filters: Object,
});

let streetName = ref(props.filters.street);
let cityId = ref(props.filters.city || 0);
let prefectureId = ref(props.filters.prefecture || 0);

watch(prefectureId, () => {
    cityId.value = 0;
});

watch(
    [streetName, cityId, prefectureId],
    debounce(function(values) {
        Inertia.get(route('admin.streets.index'), {
                'street': values[0],
                'city': values[1] > 0 ? values[1] : null,
                'prefecture': values[2] > 0 ? values[2] : null,
            },
            {
                only: ['cities', 'streets'],
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(
        route('admin.streets.edit', {
            'street': id,
            _query: {
                prefecture: prefectureId.value,
                city: cityId.value,
                street: streetName.value,
            },
        }),
    );
};

let clearForm = () => {
    prefectureId.value = 0;
    cityId.value = 0;
    streetName.value = null;
};
</script>
