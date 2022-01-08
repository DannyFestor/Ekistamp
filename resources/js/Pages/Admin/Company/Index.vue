<template>
    <Head title="Postcode Index" />

    <section class="flex flex-wrap">
        <Breadcrump>
            路線会社 Companies
        </Breadcrump>
    </section>

    <section class="flex justify-end my-4">
        <Link :href="route('admin.companies.create', { _query: { company: companyName }})"
              class="rounded px-4 py-2 bg-green-700 hover:bg-green-500 text-white">
                    New Company
        </Link>
    </section>

    <section class="flex mb-4">
        <section class="flex flex-col flex-1 space-y-2" id="search">
            <div class="flex flex-wrap items-center">
                <label class="w-full w-24" for="city_name">Postcode: </label>
                <input v-model="companyName"
                       class="flex-1 border border-gray-400 focus:border-blue-400 outline-none px-4 py-2 rounded"
                       id="city_name"
                       name="city_name"
                       type="text" />
            </div>
        </section>
        <button @click="clearForm" class="ml-4 w-16 bg-green-700 hover:bg-green-500 text-white rounded">Clear</button>
    </section>

    <section class="grid grid-cols-1 gap-2">
        <div @click="open(company.id)"
             v-for="company in companies.data"
             :key="company.id"
             class="grid grid-cols-2 md:grid-cols-4 p-4 border-gray-200 shadow rounded cursor-pointer hover:bg-gray-200">
            <div class="text-xl text-green-700">{{ company.name }}</div>
            <div class="text-xl text-green-700">{{ company.lines_count }} Lines</div>
            <div class="text-xl text-green-700">{{ company.hiragana }}</div>
            <div class="text-xl text-green-700">{{ company.romaji }}</div>
        </div>
    </section>

    <Pagination :links="companies.links" />
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
    companies: Object,
    filters: Object,
});

let companyName = ref(props.filters.company);

watch(
    companyName,
    debounce(function(value) {
        Inertia.get(route('admin.companies.index'), {
                'company': value,
            },
            {
                only: ['companies'],
                preserveState: true,
                replace: true,
            });
    }, 300),
);

let open = (id) => {
    Inertia.get(
        route('admin.companies.edit', {
            'company': id,
            _query: {
                company: companyName.value,
            },
        }),
    );
};

let clearForm = () => {
    companyName.value = null;
};
</script>
