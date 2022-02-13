<template>
  <Head title="Prefecture Index" />

  <section class="flex flex-wrap">
    <Breadcrump
      :href="
        route('admin.postcodes.index', {
          prefecture: filters.prefecture,
          city: filters.city,
        })
      "
    >
      Postcodes
    </Breadcrump>
    <Breadcrump class="capitalize">
      編集 Edit {{ postcode.postcode }}
    </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Edit Postcode</section>

  <form @submit.prevent="editPostcode" class="flex flex-col space-y-4">
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
        @click.prevent="deletePostcode"
        class="mr-4 rounded bg-red-700 px-4 py-2 text-white hover:bg-red-500"
      >
        Delete
      </button>
      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Save
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
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  prefectures: Object,
  cities: Object,
  postcode: Object,
  filters: Object,
});

const prefecture_id = ref(props.postcode.prefecture_id);
const city_id = ref(props.postcode.city_id);

let form = useForm({
  prefecture_id: prefecture_id,
  city_id: city_id,
  postcode: props.postcode.postcode,
});

watch(prefecture_id, (value) => {
  city_id.value = 0;

  Inertia.get(
    route('admin.postcodes.edit', props.postcode.id),
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

let editPostcode = async () => {
  await form.put(
    route('admin.postcodes.update', {
      postcode: props.postcode.id,
      _query: {
        prefecture: props.filters.prefecture,
        city: props.filters.city,
      },
    })
  );
};

let deletePostcode = async () => {
  await Inertia.delete(
    route('admin.postcodes.delete', {
      postcode: props.postcode.id,
      _query: {
        prefecture: props.filters.prefecture,
        city: props.filters.city,
      },
    })
  );
};
</script>
