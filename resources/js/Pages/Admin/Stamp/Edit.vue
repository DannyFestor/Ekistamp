<template>
  <Head title="Stamp Edit" />

  <section class="flex flex-wrap">
    <Breadcrump :href="route('admin.stamps.index', { stamp: filters.stamp })">
      スタンプ Stamps
    </Breadcrump>
    <Breadcrump> 新規登録 Edit </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Edit New Stamp</section>

  <form @submit.prevent="updateStamp" class="flex flex-col space-y-4">
    <FormTextSearch
      id="station_id"
      v-model:value="form.station_id"
      v-model:search="searchStation"
      :options="stations"
      :error="form.errors.station_id"
    >
      駅名 Station
    </FormTextSearch>

    <FormTextSearch
      id="company_id"
      v-model:value="form.company_id"
      v-model:search="searchCompany"
      :options="companies"
      :error="form.errors.company_id"
    >
      路線会社 Company
    </FormTextSearch>

    <FormInput id="name" v-model:value="form.name" :error="form.errors.name">
      名義(日本語) Name (Japanese)
    </FormInput>
    <FormInput
      id="name_eng"
      v-model:value="form.name_eng"
      :error="form.errors.name_eng"
    >
      名義(英語) Name (English)
    </FormInput>
    <FormInput
      id="description"
      v-model:value="form.description"
      :error="form.errors.description"
    >
      詳細(日本語) Description (Japanese)
    </FormInput>
    <FormInput
      id="description_eng"
      v-model:value="form.description_eng"
      :error="form.errors.description_eng"
    >
      詳細(英語) Description (English)
    </FormInput>

    <div class="mt-4 flex items-center justify-end">
      <button
        type="submit"
        class="rounded bg-green-700 px-4 py-2 text-white"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Edit
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
import FormTextSearch from '../../../Shared/Admin/Form/TextSearch';
import { useForm } from '@inertiajs/inertia-vue3';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  stations: Object,
  companies: Object,
  filters: Object,
});

const station_id = ref(parseInt(props.filters.station) || 0);
const company_id = ref(parseInt(props.filters.company) || 0);

const searchStation = ref(props.filters.station);
const searchCompany = ref(props.filters.company);

let form = useForm({
  station_id: station_id,
  company_id: company_id,
  name: null,
  name_eng: null,
  description: null,
  description_eng: null,
});

watch(
  searchCompany,
  debounce((value) => {
    Inertia.get(
      route('admin.stamps.create'),
      {
        company: searchCompany.value,
        station: searchStation.value,
      },
      {
        only: ['companies'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

watch(
  searchStation,
  debounce((value) => {
    Inertia.get(
      route('admin.stamps.create'),
      {
        station: searchStation.value,
        company: searchCompany.value,
      },
      {
        only: ['stations'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let updateStamp = () => {
  form.post(
    route('admin.stamps.update', {
      _query: {
        stamp: props.filters.stamp,
      },
    })
  );
};
</script>
