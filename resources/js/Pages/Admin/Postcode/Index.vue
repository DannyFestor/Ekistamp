<template>
    <Head title="Postcode Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            郵便番号 Postcodes
        </Breadcrump>
    </section>

    <section class="flex justify-end my-4">
        <Link :href="route('admin.postcodes.create', { _query: {postcode: postcodeName, city: cityId, prefecture: prefectureId }})"
              class="rounded px-4 py-2 bg-green-700 hover:bg-green-500 text-white">
                    New Postcode
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
                <label class="w-full w-24" for="city_name">Postcode: </label>
                <input v-model="postcodeName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="city_name"
                       name="city_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(postcode.id)"
             v-for="postcode in postcodes.data"
             :key="postcode.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ postcode.postcode }}</div>
            <div class="text-xl text-green-700">{{ postcode.prefecture.name }} {{ postcode.prefecture.romaji }}</div>
            <div class="text-xl text-green-700">{{ postcode.city.name }} {{ postcode.city.romaji }}</div>
            <div class="text-xl text-green-700" v-for="street in postcode.streets" :key="street.id">{{ street.name }} {{ street.romaji }}</div>
        </div>
    </section>

    <Pagination :links="postcodes.links" />
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
    postcodes: Object,
    prefectures: Object,
    cities: Object,
    filters: Object,
});

let postcodeName = ref(props.filters.postcode);
let cityId = ref(props.filters.city || 0);
let prefectureId = ref(props.filters.prefecture || 0);

watch(prefectureId, () => {
    cityId.value = 0;
});

watch(
    [postcodeName, cityId, prefectureId],
    debounce(function(values) {
        Inertia.get(route('admin.postcodes.index'), {
                'postcode': values[0],
                'city': values[1] > 0 ? values[1] : null,
                'prefecture': values[2] > 0 ? values[2] : null,
            },
            {
                only: ['cities', 'postcodes'],
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(
        route('admin.postcodes.edit', {
            'postcode': id,
            _query: {
                prefecture: prefectureId.value,
                city: cityId.value,
                postcode: postcodeName.value,
            },
        }),
    );
};

let clearForm = () => {
    prefectureId.value = 0;
    cityId.value = 0;
    postcodeName.value = null;
};
</script>
