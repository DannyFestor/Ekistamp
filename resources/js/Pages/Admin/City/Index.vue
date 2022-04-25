<template>
  <Head title="Prefecture Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 市町村郡一覧 Cities </Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.cities.create', {
          _query: { city: cityName, prefecture: prefectureId },
        })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New City
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
        <input
          v-model="cityName"
          class="flex-1 rounded border border-gray-400 px-4 py-2 outline-none focus:border-blue-400"
          id="city_name"
          name="city_name"
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
             :data-points='cities'
             @set-order='setOrder'
             @open-url='openUrl'
  />

  <Pagination :links="cities.links" />
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
  cities: Object,
  prefectures: Object,
  filters: Object,
  columns: Object,
});

let cityName = ref(props.filters.city);
let prefectureId = ref(props.filters.prefecture);
let orderColumn = ref(props.filters.order_col);
let orderDirection = ref(props.filters.order_dir);

const updateData = () => {
  Inertia.get(
    route('admin.cities.index'),
    {
      city: cityName.value,
      prefecture: prefectureId.value,
      order_col: orderColumn.value,
      order_dir: orderDirection.value,
    },
    {
      only: ['cities'],
      preserveState: true,
      replace: true,
    }
  );
}

watch(
  [cityName, prefectureId],
  debounce(updateData, 300)
);

let openUrl = (id) => {
  Inertia.get(
    route('admin.cities.edit', {
      city: id,
      _query: {
        prefecture: prefectureId.value,
        city: cityName.value,
      },
    })
  );
};

let clearForm = () => {
  prefectureId.value = 0;
  cityName.value = null;
};

const setOrder = ({ order_col, order_dir }) => {
  orderColumn.value = order_col.value;
  orderDirection.value = order_dir.value;
  updateData();
}
</script>
