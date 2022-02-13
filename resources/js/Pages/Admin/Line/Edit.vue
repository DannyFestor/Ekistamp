<template>
  <Head title="Line Edit" />

  <section class="flex flex-wrap">
    <Breadcrump :href="route('admin.lines.index', { line: filters.line })">
      路線 Lines
    </Breadcrump>
    <Breadcrump class="capitalize"> 編集 Edit {{ line.name }} </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Edit Company</section>

  <form @submit.prevent="editLine" class="flex flex-col space-y-4">
    <FormSelect
      id="prefecture_id"
      v-model:value="form.prefecture_id"
      :options="prefectures"
      :error="form.errors.prefecture_id"
    >
      都道府県 Prefecture
    </FormSelect>

    <FormTextSearch
      id="company_id"
      v-model:value="form.company_id"
      v-model:search="searchCompany"
      :options="companies"
      :error="form.errors.company_id"
    >
      路線会社 Company
    </FormTextSearch>

    <FormInput id="kanji" v-model:value="form.kanji" :error="form.errors.kanji">
      漢字 Kanji
    </FormInput>
    <FormInput
      id="hiragana"
      v-model:value="form.hiragana"
      :error="form.errors.hiragana"
    >
      ひらがな Hiragana
    </FormInput>
    <FormInput
      id="katakana"
      v-model:value="form.katakana"
      :error="form.errors.katakana"
    >
      カタカナ Katakana
    </FormInput>
    <FormInput
      id="romaji"
      v-model:value="form.romaji"
      :error="form.errors.romaji"
    >
      ローマ字 Romaji
    </FormInput>

    <div class="mt-4 flex items-center justify-end">
      <button
        @click.prevent="deleteLine"
        class="mr-4 rounded bg-red-700 px-4 py-2 text-white hover:bg-red-500"
      >
        Delete
      </button>

      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Edit
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
import { useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';

let props = defineProps({
  line: Object,
  prefectures: Object,
  companies: Object,
  filters: Object,
});

const searchCompany = ref(props.line.company.name || props.filters.company);

let form = useForm({
  prefecture_id: props.line.prefecture_id,
  company_id: props.line.company_id,
  kanji: props.line.name,
  hiragana: props.line.hiragana,
  katakana: props.line.katakana,
  romaji: props.line.romaji,
});

watch(
  searchCompany,
  debounce((value) => {
    Inertia.get(
      route('admin.lines.edit', { line: props.line.id }),
      {
        company: searchCompany.value,
      },
      {
        only: ['companies'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let editLine = async () => {
  await form.put(
    route('admin.lines.update', {
      line: props.line.id,
    })
  );
};

let deleteLine = async () => {
  await Inertia.delete(
    route('admin.lines.delete', {
      line: props.line.id,
    })
  );
};
</script>
