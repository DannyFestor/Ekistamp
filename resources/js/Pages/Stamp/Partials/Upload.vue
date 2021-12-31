<template>
    <div v-if="open" class="fixed top-0 left-0 right-0 bottom-0 z-50 flex items-center justify-center">
        <div @click="$emit('close-upload')" class="fixed top-0 left-0 right-0 bottom-0 bg-black opacity-30" />
        <div @click="$refs['stamp-upload'].click()"
             class="relative bg-white rounded p-8 flex items-center justify-center overflow-hidden w-full h-full" style="max-width: 80%; max-height: 80%">
            <div v-if="!image">Upload an Image by clicking here or dragging a file</div>
            <img v-else :src="image" alt="Upload Image">
        </div>
        <input ref="stamp-upload" type="file" class="hidden" accept="image/jpeg, image/png"
               @change="uploadFile">
    </div>
</template>

<script setup>
import {ref} from 'vue';

defineProps({
    open: Boolean,
});

let image = ref(null);

let uploadFile = (e) => {
    let files = e.target.files;
    if (files && files[0]) {
        getBase64File(files[0])
        .then((base64img) => {
            image.value = base64img;
        })
    }
};

let getBase64File = (file) => {
    return new Promise((resolve, reject) => {
        if(!file.type.match('image.*')) {
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

        img.onerror = function (e) {
            reject('Could not load image');
        }

        img.src = URL.createObjectURL(file);
    });
};
</script>
