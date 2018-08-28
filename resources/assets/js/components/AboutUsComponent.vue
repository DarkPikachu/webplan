<template>
    <b-container>
        <b-breadcrumb :items="breadcrumb_items"/>
    </b-container>
</template>

<script>
    import { Layout } from "bootstrap-vue/es/components";

    export default {
        data(){
            return {
                breadcrumb_items: [{
                    text: 'หน้าหลัก',
                    href: '/'
                }, {
                    text: 'เกี่ยวกับหน่วยงาน',
                    href: '#'
                }],
            }
        }
    }
</script>
