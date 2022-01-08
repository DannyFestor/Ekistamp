<template>
    <Head title="Company Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.companies.index', { company: filters.company })">
            路線会社 Companies
        </Breadcrump>
        <Breadcrump>
            新規登録 Create
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Create New Company
    </section>

    <form @submit.prevent="storeCompany" class="flex flex-col space-y-4">
        <section class="flex flex-col">
            <label for="name">漢字 Kanji</label>
            <input id="name" name="name" type="text" v-model="form.name">
            <div v-if="form.errors.name" v-text="form.errors.name" class="text-sm text-red-600"></div>
        </section>
        <section class="flex flex-col">
            <label for="hiragana">ひらがな Hiragana</label>
            <input id="hiragana" name="hiragana" type="text" v-model="form.hiragana">
            <div v-if="form.errors.hiragana" v-text="form.errors.hiragana" class="text-sm text-red-600"></div>
        </section>
        <section class="flex flex-col">
            <label for="katakana">カタカナ Katakana</label>
            <input id="katakana" name="katakana" type="text" v-model="form.katakana">
            <div v-if="form.errors.katakana" v-text="form.errors.katakana" class="text-sm text-red-600"></div>
        </section>
        <section class="flex flex-col">
            <label for="romaji">ローマ字 Romaji</label>
            <input id="romaji" name="romaji" type="text" v-model="form.romaji">
            <div v-if="form.errors.romaji" v-text="form.errors.romaji" class="text-sm text-red-600"></div>
        </section>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                Create
            </button>
        </div>
    </form>
</template>

<script>
import Admin from '@/Layouts/Admin';

export default {
    layout: Admin,
};
</script>

<script setup>
import Breadcrump from '../../../Shared/Breadcrump';
import {useForm} from '@inertiajs/inertia-vue3';
import {watch} from 'vue';
import {debounce} from 'lodash';
import {Inertia} from '@inertiajs/inertia';

let props = defineProps({
    filters: Object,
});

let form = useForm({
    name: null,
    hiragana: null,
    katakana: null,
    romaji: null,
});

let storeCompany = () => {
    form.post(route(
        'admin.companies.store',
        {
            _query:
                {
                    company: props.filters.company,
                },
        },
    ));
};
</script>
