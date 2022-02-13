<template>
  <Head title="Forgot Password" />

  <section class="relative flex h-full w-full items-center justify-center">
    <form
      @submit.prevent="submit"
      class="flex flex-col space-y-4 rounded-xl border border-green-700 bg-white p-8 shadow"
    >
      <div class="text-2xl font-bold text-green-600">
        パスワードを忘れた Forgot Password
      </div>

      <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address
        and we will email you a password reset link that will allow you to
        choose a new one.
      </div>

      <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
        {{ status }}
      </div>

      <article class="flex flex-col">
        <label for="email"> Email </label>
        <input
          name="email"
          id="email"
          type="email"
          v-model="form.email"
          required
        />
        <div
          v-if="form.errors.email"
          v-text="form.errors.email"
          class="text-sm text-red-600"
        ></div>
      </article>

      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Email Password Reset Link
      </button>
    </form>
  </section>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

let props = defineProps({
  status: String,
});

let form = useForm({
  email: '',
});

let submit = () => {
  form.post(route('password.email'));
};
</script>
