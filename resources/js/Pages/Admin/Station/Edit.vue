<template>
  <Head title="Station Update" />

  <section class="flex flex-wrap">
    <Breadcrump :href="route('admin.stations.index', { station: filters.station })">
      駅 Stations
    </Breadcrump>
    <Breadcrump> 新規登録 Update </Breadcrump>
  </section>

  <section class="my-4 text-2xl">Update New Station</section>

  <form @submit.prevent="updateStation" class="flex flex-col space-y-4">
    <FormSelect
      id="prefecture_id"
      v-model:value="prefecture_id"
      :options="prefectures"
      :error="form.errors.prefecture_id"
    >
      都道府県 Prefecture
    </FormSelect>

    <FormSelect
      id="city_id"
      v-model:value="city_id"
      :options="cities"
      :error="form.errors.city_id"
    >
      City
    </FormSelect>

    <FormSelect
      id="street_id"
      v-model:value="form.street_id"
      :options="streets"
      :error="form.errors.street_id"
    >
      Street
    </FormSelect>

    <FormInput id="kanji" v-model:value="form.kanji" :error="form.errors.kanji">
      漢字 Kanji
    </FormInput>
    <FormInput
      id="hiragana"
      v-model:value="form.hiragana"
      :error="form.errors.hiragana"
    >
      ひらがな Hiragana
    </FormInput>
    <FormInput
      id="katakana"
      v-model:value="form.katakana"
      :error="form.errors.katakana"
    >
      カタカナ Katakana
    </FormInput>
    <FormInput
      id="romaji"
      v-model:value="form.romaji"
      :error="form.errors.romaji"
    >
      ローマ字 Romaji
    </FormInput>

    <div class="mt-4 flex items-center justify-end">
      <button
        @click.prevent="deleteStation"
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
        Update
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
  station: Object,
  prefectures: Object,
  cities: Object,
  streets: Object,
  filters: Object,
});

const prefecture_id = ref(parseInt(props.station.prefecture_id) || 0);
const city_id = ref(parseInt(props.station.city_id) || 0);
const street_id = ref(parseInt(props.station.street_id) || 0);

let form = useForm({
  prefecture_id: prefecture_id,
  city_id: city_id,
  street_id: street_id,
  kanji: props.station.name,
  hiragana: props.station.hiragana,
  katakana: props.station.katakana,
  romaji: props.station.romaji,
});

watch(prefecture_id, (value) => {
  city_id.value = 0;

  Inertia.get(
    route('admin.stations.edit', props.station.id),
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

watch(city_id, (value) => {
  street_id.value = 0;

  Inertia.get(
    route('admin.stations.edit', props.station.id),
    {
      prefecture: form.prefecture_id ?? null,
      city: form.city_id ?? null,
    },
    {
      only: ['streets'],
      preserveState: true,
      replace: true,
    }
  );
});

let updateStation = () => {
  form.put(
    route('admin.stations.update', props.station, {
      _query: {
        station: props.filters.station,
      },
    })
  );
};

let deleteStation = async () => {
  await Inertia.delete(
    route('admin.stations.delete', {
      station: props.station.id,
    })
  );
};
</script>
