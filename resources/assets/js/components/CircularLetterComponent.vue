<template>
    <b-container fluid class="">
        <b-breadcrumb :items="items"/>
        <b-row class="row-fluid justify-content-center">
            <b-card>

            </b-card>
        </b-row>

        <b-row>

        </b-row>
    </b-container>
</template>

<script>
    import { Breadcrumb,Card } from 'bootstrap-vue/es/components';

    Vue.use(Breadcrumb);
    Vue.use(Card);
    export default {
        data () {
            return {
                items: [{
                    text: 'หน้าหลัก',
                    href: '/'
                }, {
                    text: 'หนังสือเวียน',
                    href: '#'
                }]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
