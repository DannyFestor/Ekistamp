<template>
  <Head title="Log in" />

  <section class="relative flex h-full w-full items-center justify-center">
    <form
      @submit.prevent="submit"
      class="flex flex-col space-y-4 rounded-xl border border-green-700 bg-white p-8 shadow"
    >
      <div class="text-2xl font-bold text-green-600">ログイン Login</div>

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

      <article class="flex flex-col">
        <label for="password"> Password </label>
        <input
          name="password"
          id="password"
          type="password"
          v-model="form.password"
          required
        />
      </article>

      <article class="flex items-center">
        <input
          name="remember"
          id="remember"
          type="checkbox"
          v-model="form.remember"
        />
        <label for="remember">
          <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
      </article>

      <div class="mt-4 flex items-center justify-end">
        <Link
          v-if="canResetPassword"
          :href="route('password.request')"
          class="text-sm text-gray-600 underline hover:text-gray-900"
        >
          Forgot your password?
        </Link>

        <button
          type="submit"
          class="rounded bg-green-700 px-4 py-2 text-white"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Log in
        </button>
      </div>

      <Link href="/forgot-password" class="text-gray-400 underline"
        >Forgot Password</Link
      >
    </form>
  </section>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
  email: null,
  password: null,
  remember: false,
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => this.form.reset('password'),
  });
};
</script>
