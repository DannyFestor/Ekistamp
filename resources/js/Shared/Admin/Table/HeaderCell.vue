<template>
  <th @click='$emit("click")'>
    <div class='flex items-center justify-center gap-4'>
      <slot></slot>

      <span v-if='orderable' class='inline-flex'>
          <svg v-if='orderAsc'
               xmlns='http://www.w3.org/2000/svg'
               class='h-4 w-4'
               fill='none'
               viewBox='0 0 24 24'
               stroke='currentColor'
               stroke-width='2'>
            <path stroke-linecap='round' stroke-linejoin='round' d='M5 10l7-7m0 0l7 7m-7-7v18' />
          </svg>

          <svg v-else-if='orderDesc'
               xmlns='http://www.w3.org/2000/svg'
               class='h-4 w-4'
               fill='none'
               viewBox='0 0 24 24'
               stroke='currentColor'
               stroke-width='2'>
            <path stroke-linecap='round' stroke-linejoin='round' d='M19 14l-7 7m0 0l-7-7m7 7V3' />
          </svg>

          <svg v-else
               xmlns='http://www.w3.org/2000/svg'
               class='h-4 w-4 opacity-50'
               fill='none'
               viewBox='0 0 24 24'
               stroke='currentColor'
               stroke-width='2'
          >
            <path stroke-linecap='round' stroke-linejoin='round' d='M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4' />
          </svg>
        </span>
    </div>
  </th>
</template>

<script setup>
defineProps({
  orderable: Boolean,
  orderAsc: Boolean,
  orderDesc: {
    type: Boolean,
    default: false,
  },
});

defineEmits(['click']);
</script>
