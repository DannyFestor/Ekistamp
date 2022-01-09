<template>
    <section class="flex flex-col">
        <label :for="id"><slot /></label>
        <input :id="id"
               :name="id"
               :type="type"
               :value="value"
               @input="$emit('update:value', $event.target.value)"
        >
        <div v-if="error" class="text-sm text-red-600">{{ error }}</div>
    </section>
</template>

<script setup>
defineProps({
    id: String,
    type: {
        default: 'text',
        type: String,
    },
    value: String,
    error: {
        default: null,
        type: String,
    }
});

defineEmits(['update:value']);
</script>
