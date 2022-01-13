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

        <FormInput id="kanji"
                   v-model:value="form.kanji"
                   :error="form.errors.kanji">
            漢字 Kanji
        </FormInput>
        <FormInput id="hiragana"
                   v-model:value="form.hiragana"
                   :error="form.errors.hiragana">
            ひらがな Hiragana
        </FormInput>
        <FormInput id="katakana"
                   v-model:value="form.katakana"
                   :error="form.errors.katakana">
            カタカナ Katakana
        </FormInput>
        <FormInput id="romaji"
                   v-model:value="form.romaji"
                   :error="form.errors.romaji">
            ローマ字 Romaji
        </FormInput>

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
import FormInput from '../../../Shared/Admin/Form/Input';
import {useForm} from '@inertiajs/inertia-vue3';
import {watch} from 'vue';
import {Inertia} from '@inertiajs/inertia';

let props = defineProps({
    company: Object,
    filters: Object,
});

let form = useForm({
    kanji: props.company.name,
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
