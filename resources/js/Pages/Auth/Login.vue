<template>
    <Head title="Log in" />

    <section class="relative w-full h-full flex items-center justify-center">

        <form @submit.prevent="submit" class="flex flex-col rounded-xl border border-green-200 bg-white p-8 space-y-4">
        <div class="text-green-600 text-2xl font-bold">ログイン Login</div>

            <article class="flex flex-col">
                <label for="email">
                    Email
                </label>
                <input name="email" id="email" type="email" v-model="form.email">
                <div v-if="form.errors.email" v-text="form.errors.email" class="text-sm text-red-600"></div>
            </article>

            <article class="flex flex-col">
                <label for="password">
                    Password
                </label>
                <input name="password" id="password" type="password" v-model="form.password">
            </article>

            <article class="flex items-center">
                <input type="checkbox" id="remember" name="remember" v-model="form.remember" />
                <label for="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </article>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')"
                      class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </Link>

                <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                    Log in
                </button>
            </div>
        </form>
    </section>
</template>

<script setup>

import {useForm} from '@inertiajs/inertia-vue3';

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const submit = () => {
    form.post('login', {
        onFinish: () => this.form.reset('password'),
    });
};
</script>
