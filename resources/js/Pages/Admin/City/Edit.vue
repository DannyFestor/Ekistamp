<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.cities.index', { prefecture: filters.prefecture, city: filters.city })">
            市町村郡一覧 Cities
        </Breadcrump>
        <Breadcrump class="capitalize">
            編集 Edit {{ city.name }} {{ city.romaji }}
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Create New Prefecture
    </section>

    <form @submit.prevent="editPrefecture" class="flex flex-col space-y-4">
        <section class="flex flex-col">
            <label for="prefecture_id">都道府県 Prefecture</label>
            <select id="prefecture_id" name="prefecture_id" type="text" v-model.number="form.prefecture_id" class="capitalize">
                <option :value="0">---</option>
                <option v-for="prefecture in prefectures"
                        :value="prefecture.id"
                        :key="prefecture.id"
                >
                    {{ prefecture.name }} - {{ prefecture.romaji }}
                </option>
            </select>
            <div v-if="form.errors.prefecture_id" v-text="form.errors.prefecture_id" class="text-sm text-red-600"></div>
        </section>
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
            <button @click.prevent="deletePrefecture" class="px-4 py-2 mr-4 bg-red-700 hover:bg-red-500 text-white rounded">Delete</button>

            <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded"
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
    city: Object,
    prefectures: Object,
    filters: Object,
});

let form = useForm({
    prefecture_id: props.city.prefecture_id,
    kanji: props.city.name,
    hiragana: props.city.hiragana,
    katakana: props.city.katakana,
    romaji: props.city.romaji,
});

let editPrefecture = async () => {
    await form.put(route('admin.cities.update',
        {city: props.city.id, _query: {prefecture: props.filters.prefecture, city: props.filters.city}}));
};

let deletePrefecture = async () => {
    await Inertia.delete(route('admin.cities.delete',
        {city: props.city.id, _query: {prefecture: props.filters.prefecture, city: props.filters.city}}));
};
</script>
