<template>
    <b-container fluid>
        <row>
            <b-breadcrumb :items="items"/>
        </row>
        <row>
            <b-card></b-card>
        </row>
        <row>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </row>
    </b-container >
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
