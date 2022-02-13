<template>
  <Head title="Prefecture Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 都道府県一覧 Prefectures </Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.prefectures.create', {
          _query: { prefecture: prefectureName },
        })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New Prefecture
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="prefecture_name">Prefecture: </label>
        <input
          v-model="prefectureName"
          class="flex-1 rounded border border-gray-400 px-4 py-2 outline-none focus:border-blue-400"
          id="prefecture_name"
          name="prefecture_name"
          type="text"
        />
      </div>
    </section>
    <button
      @click="clearForm"
      class="ml-4 w-16 rounded bg-green-700 text-white hover:bg-green-500"
    >
      Clear
    </button>
  </section>

  <section class="grid grid-cols-1 gap-2">
    <div
      @click="open(prefecture.id)"
      v-for="prefecture in prefectures.data"
      :key="prefecture.id"
      class="grid cursor-pointer grid-cols-2 rounded border-gray-200 p-4 shadow hover:bg-gray-200 md:grid-cols-4"
    >
      <div class="text-xl text-green-700">{{ prefecture.name }}</div>
      <div class="text-xl text-green-700">{{ prefecture.hiragana }}</div>
      <div class="text-xl text-green-700">{{ prefecture.katakana }}</div>
      <div class="text-xl capitalize text-green-700">
        {{ prefecture.romaji }}
      </div>
    </div>
  </section>

  <Pagination :links="prefectures.links" />
</template>

<script>
import Admin from '@/Layouts/Admin';

export default {
  layout: Admin,
};
</script>

<script setup>
import Breadcrump from '../../../Shared/Breadcrump';
import Pagination from '../../../Shared/Pagination';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  prefectures: Object,
  filters: Object,
});

let prefectureName = ref(props.filters.prefecture);

watch(
  prefectureName,
  debounce(function (value) {
    Inertia.get(
      route('admin.prefectures.index'),
      {
        prefecture: value,
      },
      {
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let open = (id) => {
  Inertia.get(
    route('admin.prefectures.edit', {
      prefecture: id,
      _query: { prefecture: prefectureName.value },
    })
  );
};

let clearForm = () => {
  prefectureName.value = null;
};
</script>
