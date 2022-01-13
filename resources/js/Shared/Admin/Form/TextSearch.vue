<template>
    <section ref="textsearch" class="flex flex-col relative">
        <label :for="id"><slot /></label>
        <input class="relative" type="text" @keydown.esc.tab="showOptions = false" :value="search" @input="$emit('update:search', $event.target.value)">
        <div class="relative">
            <article v-if="showOptions" class="absolute bg-white rounded shadow">
                <div
                    @click="$emit('update:value', 0); label = ''; showOptions = false"
                    class="p-4 hover:bg-gray-200 cursor-pointer"
                >
                    ---
                </div>
                <div
                    @click="$emit('update:value', option.id); label = [option.name, option.romaji].filter(n => n).join(' - '); showOptions = false"
                    v-for="option in options"
                    :key="option.id"
                    class="p-4 hover:bg-gray-200 cursor-pointer"
                >
                    {{ [option.name, option.romaji].filter(n => n).join(' - ') }}
                </div>
            </article>
            <article v-if="value > 0">
                {{ label }}
            </article>
        </div>
        <div v-if="error" class="text-sm text-red-600">{{ error }}</div>
    </section>
</template>

<script setup>
import {onBeforeMount, onBeforeUnmount, onMounted, ref} from 'vue';
// import {onBeforeMount, onBeforeUnmount} from 'vue/dist/vue';

const showOptions = ref(false);
const label = ref('')
const textsearch = ref(null);

defineProps({
    id: String,
    options: {
        default: {},
        type: Object,
    },
    type: {
        default: 'text',
        type: String,
    },
    search: String,
    value: Number,
    error: {
        default: null,
        type: String,
    },
});
defineEmits(['update:value', 'update:search']);

const clickOutsideEvent = (e) => {
    showOptions.value = !!(textsearch.value === e.target || textsearch.value.contains(e.target));
};
onMounted(() => {
    document.addEventListener('click', clickOutsideEvent);
})

onBeforeUnmount(() => {
    document.removeEventListener('click', clickOutsideEvent);
})
</script>
