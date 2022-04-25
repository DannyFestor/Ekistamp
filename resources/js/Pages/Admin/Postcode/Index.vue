<template>
  <Head title="Postcode Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 郵便番号 Postcodes </Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.postcodes.create', {
          _query: {
            postcode: postcodeName,
            city: cityId,
            prefecture: prefectureId,
          },
        })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New Postcode
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">Prefecture: </label>
        <select
          v-model.number="prefectureId"
          class="flex-1 rounded border border-gray-400 px-4 py-2 capitalize outline-none focus:border-blue-400"
          id="prefecture_id"
          name="prefecture_id"
        >
          <option :value="0">---</option>
          <option
            v-for="prefecture in prefectures"
            :key="prefecture.id"
            :value="prefecture.id"
          >
            {{ prefecture.name }} - {{ prefecture.romaji }}
          </option>
        </select>
      </div>
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">City: </label>
        <select
          v-model.number="cityId"
          class="flex-1 rounded border border-gray-400 px-4 py-2 capitalize outline-none focus:border-blue-400"
          id="city_id"
          name="city_id"
        >
          <option :value="0">---</option>
          <option v-for="city in cities" :key="city.id" :value="city.id">
            {{ city.name }} - {{ city.romaji }}
          </option>
        </select>
      </div>
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">Postcode: </label>
        <input
          v-model="postcodeName"
          class="flex-1 rounded border border-gray-400 px-4 py-2 outline-none focus:border-blue-400"
          id="city_name"
          name="city_name"
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

  <Datatable :columns='props.columns'
             :order-column='orderColumn'
             :order-direction='orderDirection'
             :data-points='postcodes'
             @set-order='setOrder'
             @open-url='openUrl'
  />

  <Pagination :links="postcodes.links" />
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
import Datatable from '../../../Shared/Admin/Table/Datatable';
import { ref, watch, computed } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  postcodes: Object,
  prefectures: Object,
  cities: Object,
  filters: Object,
  columns: Object,
});

let postcodeName = ref(props.filters.postcode);
let cityId = ref(props.filters.city || 0);
let prefectureId = ref(props.filters.prefecture || 0);
let orderColumn = ref(props.filters.order_col);
let orderDirection = ref(props.filters.order_dir);

const updateData = () => {
  Inertia.get(
    route('admin.postcodes.index'),
    {
      postcode: postcodeName.value,
      city: cityId.value,
      prefecture: prefectureId.value,
      order_col: orderColumn.value,
      order_dir: orderDirection.value,
    },
    {
      only: ['cities', 'postcodes'],
      preserveState: true,
      replace: true,
    }
  );
}

watch(prefectureId, () => {
  cityId.value = 0;
});

watch(
  [postcodeName, cityId, prefectureId],
  debounce(updateData, 300)
);

const openUrl = (id) => {
  Inertia.get(
    route('admin.postcodes.edit', {
      postcode: id,
      _query: {
        prefecture: prefectureId.value,
        city: cityId.value,
        postcode: postcodeName.value,
      },
    })
  );
};

const clearForm = () => {
  prefectureId.value = 0;
  cityId.value = 0;
  postcodeName.value = null;
};

const setOrder = ({ order_col, order_dir }) => {
  orderColumn.value = order_col.value;
  orderDirection.value = order_dir.value;
  updateData();
}
</script>
