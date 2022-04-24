<template>
  <section class="flex flex-col">
    <label :for="id"><slot /></label>
    <input
      :id="id"
      :name="id"
      type="checkbox"
      :checked="value"
      @input="$emit('update:value', $event.target.checked)"
    />
    <div v-if="error" class="text-sm text-red-600">{{ error }}</div>
  </section>
</template>

<script setup>
defineProps({
  id: String,
  value: Boolean,
  error: {
    default: null,
    type: String,
  },
});

defineEmits(['update:value']);
</script>
