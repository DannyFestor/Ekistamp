<template>
  <table class='w-full'>
    <TableHead>
      <TableRow>
        <TableHeaderCell v-for='column in columns'
                         :key='"header-col-" + column.id'
                         @click='setOrder(column.name)'
                         :order-asc='orderColumn === column.name && orderDirection === "asc"'
                         :order-desc='orderColumn === column.name && orderDirection === "desc"'
                         :orderable='column.orderable'
        >
          {{ column.label }}
        </TableHeaderCell>
      </TableRow>
    </TableHead>
    <tbody>
    <TableRow v-for='dataPoint in dataPoints.data'
              :key='dataPoint.id'
              @click='openUrl(dataPoint.id)'
    >
      <TableCell v-for='column in columns'
                 :key='"table-column-" + dataPoint.id + "-" + column.id'
      >
        {{ dataPoint[column.name] }}
      </TableCell>
    </TableRow>
    </tbody>
  </table>
</template>

<script setup>
import TableHeaderCell from './HeaderCell';
import TableHead from './Head';
import TableRow from './Row';
import TableCell from './Cell';
import { computed, ref } from 'vue';

const props = defineProps({
  orderColumn: String,
  orderDirection: String,
  columns: Object,
  dataPoints: Object,
})

let orderColumn = ref(props.orderColumn);
let orderDirection = ref(props.orderDirection);

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
      orderable: props.columns[column].orderable,
    }
  })
})

const flipOrderDirection = () => {
  if (orderDirection.value === 'asc') {
    orderDirection.value = 'desc';
    return;
  }

  orderDirection.value = 'asc';
};

const emit = defineEmits(['setOrder', 'openUrl']);

const setOrder = (col) => {
  if (!props.columns || !Object.keys(props.columns).includes(col) || !props.columns[col].orderable) {
    return;
  }

  if (orderColumn.value === col) {
    flipOrderDirection();
  }
  else {
    orderDirection.value = 'asc';
  }

  orderColumn.value = col;

  emit('setOrder', {order_col: orderColumn, order_dir: orderDirection });
};

const openUrl = (id) => {
  if(isNaN(parseInt(id))) {
    return;
  }

  emit('openUrl', {id: id});
}
</script>
