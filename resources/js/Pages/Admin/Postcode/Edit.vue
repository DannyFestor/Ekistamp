<template>
    <Head title="Prefecture Index" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.postcodes.index', { prefecture: filters.prefecture, city: filters.city })">
            Postcodes
        </Breadcrump>
        <Breadcrump class="capitalize">
            編集 Edit {{ postcode.postcode }}
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Edit Postcode
    </section>


    <form @submit.prevent="editPostcode" class="flex flex-col space-y-4">
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

        <FormInput id="postcode"
                   v-model:value="form.postcode"
                   :error="form.errors.postcode">
            郵便番号 Postcode
        </FormInput>

        <div class="flex items-center justify-end mt-4">
            <button @click.prevent="deletePostcode" class="px-4 py-2 mr-4 bg-red-700 hover:bg-red-500 text-white rounded">
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
    prefectures: Object,
    cities: Object,
    postcode: Object,
    filters: Object,
});

let form = useForm({
    prefecture_id: props.postcode.prefecture_id,
    city_id: props.postcode.city_id,
    postcode: props.postcode.postcode,
});

let loadCities = () => {
    form.city_id = 0;
    form.postcode_id = 0;

    Inertia.get(route('admin.postcodes.edit', props.postcode.id), {
            'prefecture': form.prefecture_id ?? null,
        },
        {
            only: ['cities'],
            preserveState: true,
            replace: true,
        });
};

let editPostcode = async () => {
    await form.put(route('admin.postcodes.update',
        {
            postcode: props.postcode.id,
            _query: {
                prefecture: props.filters.prefecture,
                city: props.filters.city,
            },
        }));
};

let deletePostcode = async () => {
    await Inertia.delete(
        route('admin.postcodes.delete',
            {
                postcode: props.postcode.id,
                _query: {
                    prefecture: props.filters.prefecture,
                    city: props.filters.city,
                },
            }));
};
</script>
