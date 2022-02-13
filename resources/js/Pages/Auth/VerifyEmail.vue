<template>
  <Head title="Email Verification" />

  <section class="relative flex h-full w-full items-center justify-center">
    <form
      @submit.prevent="submit"
      class="flex flex-col space-y-4 rounded-xl border border-green-700 bg-white p-8 shadow"
    >
      <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your
        email address by clicking on the link we just emailed to you? If you
        didn't receive the email, we will gladly send you another.
      </div>

      <div
        class="mb-4 text-sm font-medium text-green-600"
        v-if="verificationLinkSent"
      >
        A new verification link has been sent to the email address you provided
        during registration.
      </div>

      <div class="mt-4 flex items-center justify-between">
        <button
          class="rounded bg-green-600 px-4 py-2 text-white"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Resend Verification Email
        </button>

        <Link
          :href="route('logout')"
          method="post"
          as="button"
          class="text-sm text-gray-600 underline hover:text-gray-900"
          >Log Out
        </Link>
      </div>
    </form>
  </section>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

let props = defineProps({
  status: String,
});

const form = useForm({});

let submit = () => {
  form.post(route('verification.send'));
};
</script>

<script>
export default {
  computed: {
    verificationLinkSent() {
      return this.status === 'verification-link-sent';
    },
  },
};
</script>
