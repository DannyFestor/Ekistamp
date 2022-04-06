<template>
  <Head title="Stamps Index" />

  <section class="flex flex-wrap">
    <Breadcrump> スタンプ Stamps</Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.stamps.create', { _query: { stamp: stampName } })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New Stamp
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="stamp_name">Stamp: </label>
        <input
          v-model="stampName"
          class="outstamp-none flex-1 rounded border border-gray-400 px-4 py-2 focus:border-blue-400"
          id="stamp_name"
          name="stamp_name"
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
      @click="open(stamp.id)"
      v-for="stamp in stamps.data"
      :key="stamp.id"
      class="grid cursor-pointer grid-cols-2 rounded border-gray-200 p-4 shadow hover:bg-gray-200 md:grid-cols-4"
    >
      <div class="text-xl text-green-700">{{ stamp.name }}</div>
      <div class="text-xl text-green-700">
        {{ stamp.name_eng ?? 'N/A' }}
      </div>
      <div class="text-xl text-green-700">{{ stamp.description ?? 'N/A' }}</div>
      <div class="text-xl text-green-700">
        {{ stamp.description_eng ?? 'N/A' }}
      </div>
      <div class="text-xl text-green-700">
        {{ stamp.company?.name ?? 'N/A' }}
        {{ stamp.company?.romaji ?? 'N/A' }}
      </div>
      <div class="text-xl text-green-700">
        {{ stamp.station?.name ?? 'N/A' }}
        {{ stamp.station?.romaji ?? 'N/A' }}
      </div>
    </div>
  </section>

  <Pagination :links="stamps.links" />
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
  stamps: Object,
  stations: Object,
  companies: Object,
  filters: Object,
});

let stampName = ref(props.filters.stamp);

watch(
  stampName,
  debounce(function (value) {
    Inertia.get(
      route('admin.stamps.index'),
      {
        stamp: value,
      },
      {
        only: ['stamps'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let open = (id) => {
  Inertia.get(
    route('admin.stamps.edit', {
      stamp: id,
      _query: {
        stamp: stampName.value,
      },
    })
  );
};

let clearForm = () => {
  stampName.value = null;
};
</script>
