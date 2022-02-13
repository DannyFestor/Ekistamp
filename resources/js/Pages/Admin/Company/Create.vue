<template>
  <Head title="Company Index" />

  <section class="flex flex-wrap">
    <Breadcrump
      :href="route('admin.companies.index', { company: filters.company })"
    >
      路線会社 Companies
    </Breadcrump>
    <Breadcrump> 新規登録 Create </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Create New Company</section>

  <form @submit.prevent="storeCompany" class="flex flex-col space-y-4">
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
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
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
import { useForm } from '@inertiajs/inertia-vue3';
import { watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  filters: Object,
});

let form = useForm({
  kanji: null,
  hiragana: null,
  katakana: null,
  romaji: null,
});

let storeCompany = () => {
  form.post(
    route('admin.companies.store', {
      _query: {
        company: props.filters.company,
      },
    })
  );
};
</script>
