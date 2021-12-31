<template>
    <div v-if="open" class="fixed top-0 left-0 right-0 bottom-0 z-50 flex items-center justify-center">
        <div @click="$emit('close-upload')" class="fixed top-0 left-0 right-0 bottom-0 bg-black opacity-30" />
        <div class="relative bg-white rounded p-8 flex flex-col w-full h-full" style="width: 512px; height: 512px">
            <div class="flex-1 h-0">
                <div v-if="!image">Upload an Image by clicking here or dragging a file</div>
                <img v-else :src="image" alt="Upload Image" class="h-full" id="stamp-upload">
            </div>
            <div class="h-16 flex items-center">
                <button @click="$refs['stamp-upload'].click()" class="px-4 py-2 rounded bg-green-700 hover:bg-green-500 text-white">Select Image</button>
                <button v-if="image" @click="upload">Upload</button>
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
                <input ref="stamp-upload"
                       type="file"
                       class="hidden"
                       accept="image/jpeg, image/png"
                       @change="selectFile">
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue';
import Cropper from 'cropperjs';
import {useForm} from '@inertiajs/inertia-vue3';

let props = defineProps({
    open: Boolean,
    url: String,
});

let form = useForm({
    image: null,
})

let image = ref(null);

let cropper = null;

let selectFile = (e) => {
    let files = e.target.files;
    if (files && files[0]) {
        if (cropper) {
            cropper.destroy();
            image.value = null;
        }
        getBase64File(files[0]).then((base64img) => {
            image.value = base64img;
            return true;
        }).then(() => {
            const img = document.querySelector('#stamp-upload');
            cropper = new Cropper(img);
        });
    }
};

let upload = async () => {
    form.image = cropper.getCroppedCanvas().toDataURL();
    form.post(props.url);
}

let getBase64File = (file) => {
    return new Promise((resolve, reject) => {
        if (!file.type.match('image.*')) {
            reject('File is not an image!');
        }

        const img = new Image();
        img.onload = function() {
            const canvas = document.createElement('canvas');
            if (img.width >= img.height && img.width > 1024) {
                const ratio = img.height / img.width;
                img.width = 1024;
                img.height = img.width * ratio;
            }
            else if (img.height > img.width && img.height > 1024) {
                const ratio = img.height / img.width;
                img.height = 1024;
                img.width = img.height / ratio;
            }
            const ctx = canvas.getContext('2d');
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0, img.width, img.height);
            resolve(canvas.toDataURL(file.type, 0.7));
        };

        img.onerror = function(e) {
            reject('Could not load image');
        };

        img.src = URL.createObjectURL(file);
    });
};
</script>
