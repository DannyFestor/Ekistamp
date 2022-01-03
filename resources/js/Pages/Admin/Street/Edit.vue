<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.streets.index', { prefecture: filters.prefecture, city: filters.city })">
            Streets
        </Breadcrump>
        <Breadcrump class="capitalize">
            編集 Edit {{ street.name }} {{ street.romaji }}
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Edit Street
    </section>

    <form @submit.prevent="editStreet" class="flex flex-col space-y-4">
        <section class="flex flex-col">
            <label for="prefecture_id">都道府県 Prefecture</label>
            <select id="prefecture_id"
                    name="prefecture_id"
                    v-model.number="form.prefecture_id"
                    @change="loadCities"
                    class="capitalize">
                <option value="0">---</option>
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
            <label for="city_id">志村町郡 City</label>
            <select id="city_id" name="city_id" v-model.number="form.city_id" class="capitalize"
                    @change="loadPostcodes">
                <option :value="0">---</option>
                <option v-for="city in cities"
                        :value="city.id"
                        :key="city.id"
                >
                    {{ city.name }} - {{ city.romaji }}
                </option>
            </select>
            <div v-if="form.errors.city_id" v-text="form.errors.city_id" class="text-sm text-red-600"></div>
        </section>
        <section class="flex flex-col">
            <label for="postcode_id">郵便番号 Postcode</label>
            <select id="postcode_id" name="postcode_id" v-model.number="form.postcode_id" class="capitalize">
                <option :value="0">---</option>
                <option v-for="postcode in postcodes"
                        :value="postcode.id"
                        :key="postcode.id"
                >
                    {{ postcode.postcode }}
                </option>
            </select>
            <div v-if="form.errors.postcode_id" v-text="form.errors.postcode_id" class="text-sm text-red-600"></div>
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
            <button @click.prevent="deleteStreet" class="px-4 py-2 bg-red-700 hover:bg-red-500 text-white rounded">
                Delete
            </button>
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
    street: Object,
    prefectures: Object,
    cities: Object,
    postcodes: Object,
    filters: Object,
});

let form = useForm({
    prefecture_id: props.street.prefecture_id,
    city_id: props.street.city_id,
    postcode_id: props.street.postcode_id,
    kanji: props.street.name,
    hiragana: props.street.hiragana,
    katakana: props.street.katakana,
    romaji: props.street.romaji,
});

let loadCities = () => {
    form.city_id = 0;
    form.postcode_id = 0;

    Inertia.get(route('admin.streets.edit', props.street.id), {
            'prefecture': form.prefecture_id ?? null,
        },
        {
            only: ['cities'],
            preserveState: true,
            replace: true,
        });
};

let loadPostcodes = () => {
    form.postcode_id = 0;

    Inertia.get(route('admin.streets.edit', props.street.id), {
            'prefecture': form.prefecture_id ?? null,
            'city': form.city_id ?? null,
        },
        {
            only: ['postcodes'],
            preserveState: true,
            replace: true,
        });
};

let editStreet = async () => {
    await form.put(route('admin.streets.update',
        {
            street: props.street.id,
            _query: {
                prefecture: props.filters.prefecture,
                city: props.filters.city,
            },
        }));
};

let deleteStreet = async () => {
    await Inertia.delete(
        route('admin.streets.delete',
            {
                street: props.street.id,
                _query: {
                    prefecture: props.filters.prefecture,
                    city: props.filters.city,
                },
            }));
};
</script>
