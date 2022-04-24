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

  <table class='w-full'>
    <TableHead>
      <TableRow>
        <TableHeaderCell v-for='column in columns'
                         :key='column.id'
                         @click='setOrder(column.name)'
                         :order-asc='orderColumn === column.name && orderDirection === "asc"'
                         :order-desc='orderColumn === column.name && orderDirection === "desc"'
                         >
          {{ column.label }}
        </TableHeaderCell>
      </TableRow>
    </TableHead>
    <tbody>
    <TableRow v-for='prefecture in prefectures.data'
              :key='prefecture.id'
    >
      <TableCell>{{ prefecture.name }}</TableCell>
      <TableCell>{{ prefecture.hiragana }}</TableCell>
      <TableCell>{{ prefecture.katakana }}</TableCell>
      <TableCell>{{ prefecture.romaji }}</TableCell>
    </TableRow>
    </tbody>
  </table>

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
import TableHeaderCell from '../../../Shared/Admin/Table/HeaderCell';
import TableHead from '../../../Shared/Admin/Table/Head';
import TableRow from '../../../Shared/Admin/Table/Row';
import TableCell from '../../../Shared/Admin/Table/Cell';
import { ref, watch, computed } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  prefectures: Object,
  columns: Object,
  filters: Object,
});

const columns = computed(() => {
  return Object.keys(props.columns)
  .filter(column => {
    return props.columns[column].hidden === false;
  })
  .map((column, idx) => {
    return {
      id: idx,
      name: column,
      label: props.columns[column].label,
    }
  })
})

let prefectureName = ref(props.filters.prefecture);
let orderColumn = ref(props.filters.order_col);
let orderDirection = ref(props.filters.order_dir || 'asc');

watch(
  prefectureName,
  debounce(function(value) {
    Inertia.get(
      route('admin.prefectures.index'),
      {
        prefecture: value,
        order_col: orderColumn,
        order_dir: orderDirection,
      },
      {
        preserveState: true,
        replace: true,
      },
    );
  }, 300),
);

const flipOrderDirection = () => {
  if (orderDirection.value === 'asc') {
    orderDirection.value = 'desc';
    return;
  }

  orderDirection.value = 'asc';
};

const setOrder = (col) => {
  if (!props.columns && !Object.keys(props.columns).includes(col)) {
    return;
  }

  if (orderColumn.value === col) {
    flipOrderDirection();
  }
  else {
    orderDirection.value = 'asc';
  }

  orderColumn.value = col;

  Inertia.get(
    route('admin.prefectures.index'),
    {
      prefecture: prefectureName.value,
      order_col: col,
      order_dir: orderDirection.value,
    },
    {
      preserveState: true,
      replace: true,
    },
  );
};

let open = (id) => {
  Inertia.get(
    route('admin.prefectures.edit', {
      prefecture: id,
      _query: { prefecture: prefectureName.value },
    }),
  );
};

let clearForm = () => {
  prefectureName.value = null;
};
</script>
