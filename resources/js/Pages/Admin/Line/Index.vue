<template>
    <Head title="Lines Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            路線 Lines
        </Breadcrump>
    </section>

    <section class="flex justify-end my-4">
        <Link :href="route('admin.lines.create', { _query: { line: lineName }})"
              class="rounded px-4 py-2 bg-green-700 hover:bg-green-500 text-white">
                    New Line
        </Link>
    </section>

    <section class="flex mb-4">
        <section class="flex flex-col flex-1 space-y-2" id="search">
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="line_name">Line: </label>
                <input v-model="lineName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="line_name"
                       name="line_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(line.id)"
             v-for="line in lines.data"
             :key="line.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ line.name }}</div>
            <div class="text-xl text-green-700">{{ line.hiragana ?? 'N/A' }}</div>
            <div class="text-xl text-green-700">{{ line.romaji ?? 'N/A' }}</div>
            <div class="text-xl text-green-700">{{ line.prefecture.name }} ({{ line.prefecture.romaji }})</div>
            <div class="text-xl text-green-700">{{ line.company.name }} ({{ line.company.romaji }})</div>
        </div>
    </section>

    <Pagination :links="lines.links" />
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
    lines: Object,
    filters: Object,
});

let lineName = ref(props.filters.line);

watch(
    lineName,
    debounce(function(value) {
        Inertia.get(route('admin.lines.index'), {
                'line': value,
            },
            {
                only: ['lines'],
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(
        route('admin.lines.edit', {
            'line': id,
            _query: {
                line: lineName.value,
            },
        }),
    );
};

let clearForm = () => {
    lineName.value = null;
};
</script>
