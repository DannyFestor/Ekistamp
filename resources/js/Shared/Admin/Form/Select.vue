<template>
    <section class="flex flex-col">
        <label :for="id"><slot /></label>
        <select :id="id"
                :name="id"
                @change="$emit('update:value', parseInt($event.target.value))"
                class="capitalize"
        >
            <option value="0">---</option>
            <option v-for="option in options"
                    :value="option.id"
                    :key="option.id"
            >
                {{ option.name }} - {{ option.romaji }}
            </option>
        </select>
        <div v-if="error" class="text-sm text-red-600">{{ error }}</div>
    </section>
</template>

<script setup>
defineProps({
    id: String,
    options: {
        default: [],
        type: Object,
    },
    type: {
        default: 'text',
        type: String,
    },
    value: Number,
    error: {
        default: null,
        type: String,
    },
});

defineEmits(['update:value']);
</script>
