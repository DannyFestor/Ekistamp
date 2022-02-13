<template>
  <Head title="Log in" />

  <section class="relative flex h-full w-full items-center justify-center">
    <form
      @submit.prevent="submit"
      class="flex flex-col space-y-4 rounded-xl border border-green-700 bg-white p-8 shadow"
    >
      <div class="text-2xl font-bold text-green-600">登録 Register</div>

      <article class="flex flex-col">
        <label for="name"> Name </label>
        <input name="name" id="name" type="text" v-model="form.name" required />
        <div
          v-if="form.errors.name"
          v-text="form.errors.name"
          class="text-sm text-red-600"
        ></div>
      </article>

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
        <div
          v-if="form.errors.password"
          v-text="form.errors.password"
          class="text-sm text-red-600"
        ></div>
      </article>

      <article class="flex flex-col">
        <label for="password_confirmation"> Confirm Password </label>
        <input
          name="password_confirmation"
          id="password_confirmation"
          type="password"
          v-model="form.password_confirmation"
          required
        />
        <div
          v-if="form.errors.password_confirmation"
          v-text="form.errors.password_confirmation"
          class="text-sm text-red-600"
        ></div>
      </article>

      <div class="mt-4 flex items-center justify-end">
        <button
          type="submit"
          class="rounded bg-green-700 px-4 py-2 text-white"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Log in
        </button>
      </div>
    </form>
  </section>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
});

const submit = () => {
  form.post(route('register'), {
    onFinish: () => this.form.reset('password', 'password_confirmation'),
  });
};
</script>
