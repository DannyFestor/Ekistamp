<template>
  <Head title='Prefecture Index' />

  <section class='flex flex-wrap'>
    <Breadcrump> 都道府県一覧 Prefectures</Breadcrump>
  </section>

  <section class='my-4 flex justify-end'>
    <Link
      :href="
        route('admin.prefectures.create', {
          _query: { prefecture: prefectureName },
        })
      "
      class='rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500'
    >
      New Prefecture
    </Link>
  </section>

  <section class='mb-4 flex'>
    <section class='flex flex-1 flex-col space-y-2' id='search'>
      <div class='flex flex-wrap items-center'>
        <label class='w-full w-24' for='prefecture_name'>Prefecture: </label>
        <input
          v-model='prefectureName'
          class='flex-1 rounded border border-gray-400 px-4 py-2 outline-none focus:border-blue-400'
          id='prefecture_name'
          name='prefecture_name'
          type='text'
        />
      </div>
    </section>
    <button
      @click='clearForm'
      class='ml-4 w-16 rounded bg-green-700 text-white hover:bg-green-500'
    >
      Clear
    </button>
  </section>

  <section class='flex flex-end'>

  </section>

  <Datatable :columns='props.columns'
             :order-column='orderColumn'
             :order-direction='orderDirection'
             :data-points='prefectures'
             @set-order='setOrder'
             @open-url='openUrl'
  />

  <Pagination :links='prefectures.links' />
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
  prefectures: Object,
  columns: Object,
  filters: Object,
});

let prefectureName = ref(props.filters.prefecture);
let orderColumn = ref(props.filters.order_col);
let orderDirection = ref(props.filters.order_dir || 'asc');

const updateData = () => {
  Inertia.get(
    route('admin.prefectures.index'),
    {
      prefecture: prefectureName.value,
      order_col: orderColumn.value,
      order_dir: orderDirection.value,
    },
    {
      preserveState: true,
      replace: true,
    },
  );
}


watch(
  prefectureName,
  debounce(updateData, 300),
);

let openUrl = (id) => {
  Inertia.get(
    route('admin.prefectures.edit', {
      prefecture: id,
      _query: { prefecture: prefectureName.value },
    }),
  );
};

const setOrder = ({ order_col, order_dir }) => {
  orderColumn.value = order_col.value;
  orderDirection.value = order_dir.value;
  updateData();
}

let clearForm = () => {
  prefectureName.value = null;
};
</script>
