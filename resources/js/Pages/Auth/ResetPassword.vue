<template>
    <Head title="Reset Password" />

    <section class="relative w-full h-full flex items-center justify-center">
        <form @submit.prevent="submit" class="flex flex-col rounded-xl border border-green-700 shadow bg-white p-8 space-y-4">
            <article class="flex flex-col">
                <label for="email">
                    Email
                </label>
                <input name="email"
                       id="email"
                       type="email"
                       v-model="form.email"
                       required
                       autofocus
                       autocomplete="email">
                <div v-if="form.errors.email" v-text="form.errors.email" class="text-sm text-red-600"></div>
            </article>

            <article class="flex flex-col">
                <label for="password">
                    Password
                </label>
                <input name="password"
                       id="password"
                       type="password"
                       v-model="form.password"
                       required
                       autocomplete="new-password">
                <div v-if="form.errors.password" v-text="form.errors.password" class="text-sm text-red-600"></div>
            </article>

            <article class="flex flex-col">
                <label for="password_confirmation">
                    Confirm Password
                </label>
                <input name="password_confirmation"
                       id="password_confirmation"
                       type="password"
                       v-model="form.password_confirmation"
                       required
                       autocomplete="new-password">
                <div v-if="form.errors.password_confirmation" v-text="form.errors.password_confirmation"
                     class="text-sm text-red-600"></div>
            </article>

            <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                Reset Password
            </button>
        </form>
    </section>
</template>

<script setup>

import {useForm} from '@inertiajs/inertia-vue3';

let props = defineProps({
    email: String,
    token: String,
});

let form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

let submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>
