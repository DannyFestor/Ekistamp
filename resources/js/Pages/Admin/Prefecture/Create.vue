<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.prefectures.index', { prefecture: filters.prefecture })">
            都道府県一覧 Prefectures
        </Breadcrump>
        <Breadcrump>
            新規登録 Create
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Create New Prefecture
    </section>

    <form @submit.prevent="storePrefecture" class="flex flex-col space-y-4">
        <section class="flex flex-col">
            <label for="kanji">漢字 Kanji</label>
            <input id="kanji" name="kanji" type="text" v-model="form.kanji">
            <div v-if="form.errors.kanji" v-text="form.errors.kanji" class="text-sm text-red-600"></div>
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

let props = defineProps({
    filters: Object,
});

let form = useForm({
    kanji: null,
    hiragana: null,
    katakana: null,
    romaji: null,
});

let storePrefecture = () => {
    form.post(route('admin.prefectures.store', {_query: {prefecture: props.filters.prefecture}}));
};
</script>
