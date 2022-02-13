<template>
  <Head title="Prefecture Index" />

  <section class="flex flex-wrap">
    <Breadcrump
      :href="
        route('admin.prefectures.index', {
          prefecture: filters.prefecture,
        })
      "
    >
      都道府県一覧 Prefectures
    </Breadcrump>
    <Breadcrump class="capitalize">
      編集 Edit {{ prefecture.name }} {{ prefecture.romaji }}
    </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Create New Prefecture</section>

  <form @submit.prevent="editPrefecture" class="flex flex-col space-y-4">
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
        @click.prevent="deletePrefecture"
        class="mr-4 rounded bg-red-700 px-4 py-2 text-white hover:bg-red-500"
      >
        Delete
      </button>

      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
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
import { useForm } from '@inertiajs/inertia-vue3';
import { watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  prefecture: Object,
  filters: Object,
});

let form = useForm({
  kanji: props.prefecture.name,
  hiragana: props.prefecture.hiragana,
  katakana: props.prefecture.katakana,
  romaji: props.prefecture.romaji,
});

let editPrefecture = async () => {
  await form.put(
    route('admin.prefectures.update', {
      prefecture: props.prefecture.id,
      _query: { prefecture: props.filters.prefecture },
    })
  );
};

let deletePrefecture = async () => {
  await Inertia.delete(
    route('admin.prefectures.delete', {
      prefecture: props.prefecture.id,
      _query: { prefecture: props.filters.prefecture },
    })
  );
};
</script>
