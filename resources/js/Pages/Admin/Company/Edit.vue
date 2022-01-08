<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.companies.index', { company: filters.company })">
            路線会社 Companies
        </Breadcrump>
        <Breadcrump class="capitalize">
            編集 Edit {{ company.company }}
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Edit Company
    </section>


    <form @submit.prevent="editCompany" class="flex flex-col space-y-4">
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
            <button @click.prevent="deleteCompany"
                    class="px-4 py-2 mr-4 bg-red-700 hover:bg-red-500 text-white rounded">
                Delete
            </button>
            <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                Save
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
import {Inertia} from '@inertiajs/inertia';

let props = defineProps({
    company: Object,
    filters: Object,
});

let form = useForm({
    name: props.company.name,
    hiragana: props.company.hiragana,
    katakana: props.company.katakana,
    romaji: props.company.romaji,
});

let editCompany = async () => {
    await form.put(
        route('admin.companies.update',
            {
                company: props.company.id,
            },
        ),
    );
};

let deleteCompany = async () => {
    await Inertia.delete(
        route('admin.companies.delete',
            {
                company: props.company.id,
            },
        ),
    );
};
</script>
