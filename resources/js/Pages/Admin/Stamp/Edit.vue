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

    <FormCheckbox
      id="is_approved"
      v-model:value="form.is_approved"
      :error="form.errors.is_approved"
    >
      承認済み（スタンプを表示） Approved (Display Stamp)
    </FormCheckbox>

    <div class="mt-4 flex items-center justify-end">
      <button
        @click.prevent="deleteStamp"
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
import FormCheckbox from '../../../Shared/Admin/Form/Checkbox';
import FormTextSearch from '../../../Shared/Admin/Form/TextSearch';
import { useForm } from '@inertiajs/inertia-vue3';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  stamp: Object,
  stations: Object,
  companies: Object,
  filters: Object,
});

const station_id = ref(parseInt(props.filters.station) || props.stamp.station_id);
const company_id = ref(parseInt(props.filters.company) || props.stamp.company_id);

const searchStation = ref(props.filters.station || props.stations?.find(station => station.id === station_id.value)?.name);
const searchCompany = ref(props.filters.company || props.companies?.find(company => company.id === company_id.value)?.name);

let form = useForm({
  station_id: station_id,
  company_id: company_id,
  name: props.stamp.name,
  name_eng: props.stamp.name_eng,
  description: props.stamp.description,
  description_eng: props.stamp.description_eng,
  is_approved: props.stamp.is_approved,
});

watch(
  searchCompany,
  debounce((value) => {
    Inertia.get(
      route('admin.stamps.edit', props.stamp.id),
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
      route('admin.stamps.edit', props.stamp.id),
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
  form.put(
    route('admin.stamps.update', props.stamp.id, {
      _query: {
        stamp: props.filters.stamp,
      },
    })
  );
};


let deleteStamp = async () => {
  await Inertia.delete(
    route('admin.stamps.delete', {
      stamp: props.stamp.id,
    })
  );
};
</script>
