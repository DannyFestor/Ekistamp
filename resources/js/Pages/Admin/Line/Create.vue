<template>
    <Head title="Line Create" />

    <section class="flex flex-wrap">
        <Breadcrump :href="route('admin.lines.index', { line: filters.line })">
            路線 Lines
        </Breadcrump>
        <Breadcrump>
            新規登録 Create
        </Breadcrump>
    </section>

    <section class="my-4 text-2xl">
        Create New Line
    </section>

    <form @submit.prevent="storeLine" class="flex flex-col space-y-4">
        <FormSelect id="prefecture_id"
                    v-model:value="form.prefecture_id"
                    :options="prefectures"
                    :error="form.errors.prefecture_id"
        >
            都道府県 Prefecture
        </FormSelect>

        <FormTextSearch id="company_id"
                        v-model:value="form.company_id"
                        v-model:search="searchCompany"
                        :options="companies"
                        :error="form.errors.company_id"
        >
            路線会社 Company
        </FormTextSearch>

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
import FormInput from '../../../Shared/Admin/Form/Input';
import FormSelect from '../../../Shared/Admin/Form/Select';
import FormTextSearch from '../../../Shared/Admin/Form/TextSearch';
import {useForm} from '@inertiajs/inertia-vue3';
import {ref, watch} from 'vue';
import {debounce} from 'lodash';
import {Inertia} from '@inertiajs/inertia';

let props = defineProps({
    prefectures: Object,
    companies: Object,
    filters: Object,
});

const searchCompany = ref(props.filters.company);

let form = useForm({
    prefecture_id: 0,
    company_id: 0,
    kanji: null,
    hiragana: null,
    katakana: null,
    romaji: null,
});

watch(searchCompany, debounce((value) => {
    Inertia.get(route('admin.lines.create'), {
            'company': searchCompany.value,
        },
        {
            only: ['companies'],
            preserveState: true,
            replace: true,
        });
}, 300));

let storeLine = () => {
    form.post(route(
        'admin.lines.store',
        {
            _query:
                {
                    line: props.filters.line,
                },
        },
    ));
};
</script>
