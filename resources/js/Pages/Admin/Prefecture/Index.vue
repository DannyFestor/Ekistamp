<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            都道府県一覧 Prefectures
        </Breadcrump>
    </section>

    <section class="flex mb-4">
        <section class="flex flex-col flex-1 space-y-2" id="search">
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="prefecture_name">Prefecture: </label>
                <input v-model="prefectureName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="prefecture_name"
                       name="prefecture_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(prefecture.id)"
             v-for="prefecture in prefectures.data"
             :key="prefecture.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ prefecture.name }}</div>
            <div class="text-xl text-green-700">{{ prefecture.hiragana }}</div>
            <div class="text-xl text-green-700">{{ prefecture.katakana }}</div>
            <div class="text-xl text-green-700 capitalize">{{ prefecture.romaji }}</div>
        </div>
    </section>

    <Pagination :links="prefectures.links" />
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
    prefectures: Object,
    filters: Object,
});

let prefectureName = ref(props.filters.prefecture);

watch(
    prefectureName,
    debounce(function(value) {
        Inertia.get(route('admin.prefectures.index'), {
                'prefecture': value,
            },
            {
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(route('admin.prefectures.show',
        {'prefecture': id, _query: {'prefecture': prefectureName.value}}));
};

let clearForm = () => {
    prefectureName.value = null;
};
</script>
