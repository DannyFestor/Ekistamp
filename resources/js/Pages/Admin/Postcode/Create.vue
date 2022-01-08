<template>
    <Head title="City Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.postcodes.index', { prefecture: filters.prefecture, city: filters.city })">
            郵便番号 Postcodes
        </Breadcrump>
        <Breadcrump>
            新規登録 Create
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Create New Postcode
    </section>

    <form @submit.prevent="storePostcode" class="flex flex-col space-y-4">
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
            <select id="city_id" name="city_id" v-model.number="form.city_id" class="capitalize" @change="loadPostcodes">
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
            <label for="postcode">郵便番号</label>
            <input id="postcode" name="postcode" type="text" v-model="form.postcode">
            <div v-if="form.errors.postcode" v-text="form.errors.postcode" class="text-sm text-red-600"></div>
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
    prefectures: Object,
    cities: Object,
    filters: Object,
});

let form = useForm({
    prefecture_id: parseInt(props.filters.prefecture) || 0,
    city_id: parseInt(props.filters.city) || 0,
    postcode: null,
});

let loadCities = () => {
    form.reset('city_id');

    Inertia.get(route('admin.postcodes.create'), {
            'prefecture': form.prefecture_id ?? null,
        },
        {
            only: ['cities'],
            preserveState: true,
            replace: true,
        });
};

let storePostcode = () => {
    form.post(route(
        'admin.postcodes.store',
        {
            _query:
                {
                    prefecture: props.filters.prefecture,
                    city: props.filters.city,
                    street: props.filters.street,
                },
        },
    ));
};
</script>
