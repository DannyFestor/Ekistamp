<template>
  <Head title="City Index" />

  <section class="flex flex-wrap">
    <Breadcrump
      :href="
        route('admin.postcodes.index', {
          prefecture: filters.prefecture,
          city: filters.city,
        })
      "
    >
      郵便番号 Postcodes
    </Breadcrump>
    <Breadcrump> 新規登録 Create </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Create New Postcode</section>

  <form @submit.prevent="storePostcode" class="flex flex-col space-y-4">
    <FormSelect
      id="prefecture_id"
      v-model:value.number="prefecture_id"
      :options="prefectures"
      :error="form.errors.prefecture_id"
    >
      都道府県 Prefecture
    </FormSelect>

    <FormSelect
      id="city_id"
      v-model:value.number="form.city_id"
      :options="cities"
      :error="form.errors.city_id"
    >
      志村町郡 City
    </FormSelect>

    <FormInput
      id="postcode"
      v-model:value="form.postcode"
      :error="form.errors.postcode"
    >
      郵便番号 Postcode
    </FormInput>

    <div class="mt-4 flex items-center justify-end">
      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Create
      </button>
    </div>
  </form>
</template>

<script>
import Admin from '@/Layouts/Admin';

export default {
  layout: Admin,
};
</script>

<script setup>
import Breadcrump from '../../../Shared/Breadcrump';
import FormInput from '../../../Shared/Admin/Form/Input';
import FormSelect from '../../../Shared/Admin/Form/Select';
import { useForm } from '@inertiajs/inertia-vue3';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  prefectures: Object,
  cities: Object,
  filters: Object,
});

const prefecture_id = ref(parseInt(props.filters.prefecture) || 0);
const city_id = ref(parseInt(props.filters.city) || 0);

let form = useForm({
  prefecture_id: prefecture_id,
  city_id: city_id,
  postcode: null,
});

watch(prefecture_id, (value) => {
  city_id.value = 0;

  Inertia.get(
    route('admin.postcodes.create'),
    {
      prefecture: form.prefecture_id ?? null,
    },
    {
      only: ['cities'],
      preserveState: true,
      replace: true,
    }
  );
});

let storePostcode = () => {
  form.post(
    route('admin.postcodes.store', {
      _query: {
        prefecture: props.filters.prefecture,
        city: props.filters.city,
        street: props.filters.street,
      },
    })
  );
};
</script>
