<template>
    <b-container>
        <b-breadcrumb :items="breadcrumb_items"/>
        <gallery :images="images" :index="index" @close="index = null"></gallery>
        <div
            class="image"
            v-for="(image, imageIndex) in images"
            :key="imageIndex"
            @click="index = imageIndex"
            :style="{ backgroundImage: 'url(' + image + ')', width: '300px', height: '200px' }"
        ></div>
    </b-container>
</template>

<script>
    import { Layout } from "bootstrap-vue/es/components";
    import VueGallery from 'vue-gallery';

    export default {
        data(){
            return {
                breadcrumb_items: [{
                    text: 'หน้าหลัก',
                    href: 'https://localhost/webplan/public'
                }, {
                    text: 'ประมวลภาพกิจกรรมหน่วยงาน',
                    href: 'https://localhost/webplan/public/gallery'
                } , {
                    text: 'album',
                    href: 'https://localhost/webplan/public/gallery'
                }],
                images: [
                    'https://localhost/webplan/public/gallery/photo/123/1',
                    'https://localhost/webplan/public/gallery/photo/123/1',
                    'https://localhost/webplan/public/gallery/photo/123/1',
                    'https://localhost/webplan/public/gallery/photo/123/1',
                ],
                index: null
            }
        },
        components: {
            'gallery': VueGallery
        },
    }
</script>

<style>
    .image {
        float: left;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        border: 1px solid #ebebeb;
        margin: 5px;
    }
    a .next{
        color: aliceblue
    }
    a .prev{
        
        color: aliceblue
    }
</style>

