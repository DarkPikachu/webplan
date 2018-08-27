<template>
    <b-container fluid>
        <b-breadcrumb :items="items"/>
        <b-row class="row-fluid justify-content-center">
            <b-col col lg="8">
                <b-card 
                    title="ค้นหาหนังสือเวียน"
                >
                    <b-card-body class="mid">
                        <b-form-group id="fg1"
                            horizontal
                            :label-cols="4"
                            breakpoint="md"
                            label="ชื่อเรื่อง :"
                            label-for="letter_name">
                            <b-form-input id="letter_name"></b-form-input>
                        </b-form-group>

                        <b-form-group id="fg2"
                            horizontal
                            :label-cols="4"
                            breakpoint="md"
                            label="เลขที่หนังสือ :"
                            label-for="letter_number">
                            <b-form-input id="letter_number"></b-form-input>
                        </b-form-group>

                        <b-form-group id="fg3"
                            horizontal
                            :label-cols="4"
                            breakpoint="md"
                            label="วัน เดือน ปี :"
                            label-for="issue_date">
                            <date-picker  id="issue_date" name="date" v-model="date" :config="options"></date-picker>
                        </b-form-group>

                        <b-form-group id="fg4"
                            horizontal
                            :label-cols="4"
                            breakpoint="md"
                            label="หมวดหมู่ :"
                            label-for="catalog">
                            <b-form-input id="catalog"></b-form-input>
                        </b-form-group>

                        <b-form-group id="fg5"
                            horizontal
                            :label-cols="4"
                            breakpoint="md"
                            label="เรียงลำดับ :"
                            label-for="sort_type">
                            <b-form-input id="sort_type"></b-form-input>
                        </b-form-group>
                        <b-form-group
                            id="fieldset1"
                            :label-cols="4"
                            label-for="submit"
                        >
                            <b-button type="submit" variant="secondary"> ค้นหา </b-button>
                        </b-form-group>
                    </b-card-body>
                </b-card>
            </b-col>
        </b-row>

        <b-row>
            <b-col>
                <b-table striped hover :items="table_items" :fields="fields"></b-table>
            </b-col>             
        </b-row>
    </b-container>
</template>

<script>
    import { Breadcrumb,Card,FormGroup,Table } from 'bootstrap-vue/es/components';
    import datePicker from 'vue-bootstrap-datetimepicker';
    import 'pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css';
    Vue.use(datePicker);
    // Using font-awesome 5 icons
    /*
    $.extend(true, $.fn.datetimepicker.defaults, {
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar',
            up: 'fas fa-arrow-up',
            down: 'fas fa-arrow-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right',
            today: 'fas fa-calendar-check',
            clear: 'far fa-trash-alt',
            close: 'far fa-times-circle'
        }
    });*/
    export default {
        data () {
            return {
                date: null,
                options: {
                    // https://momentjs.com/docs/#/displaying/
                    format: 'DD/MM/YYYY',
                    useCurrent: false,
                    showClear: true,
                    showClose: true,
                },
                items: [{
                    text: 'หน้าหลัก',
                    href: '/'
                }, {
                    text: 'หนังสือเวียน',
                    href: '#'
                }],
                fields: [ 'ลำดับที่', 'ชื่อเรื่อง', 'เลขที่หนังสือ', 'วันที่ประกาศ', 'หน้า', 'เข้าชม', 'ดาวน์โหลด' ],
                table_items: [
                    { isActive: true, order: 1, letter_name: 'Dickerson', letter_number: 'Macdonald' , issue_date: 'Macdonald', page_num: 'Macdonald' , view_count: 'Macdonald', download_cont: 'Macdonald' },
                    { isActive: false, order: 2, letter_name: 'Larsen', letter_number: 'Shaw', issue_date: 'Macdonald', page_num: 'Macdonald' , view_count: 'Macdonald', download_cont: 'Macdonald' },
                    { isActive: false, order: 3, letter_name: 'Geneva', letter_number: 'Wilson', issue_date: 'Macdonald', page_num: 'Macdonald' , view_count: 'Macdonald', download_cont: 'Macdonald' },
                    { isActive: true, order: 4, letter_name: 'Jami', letter_number: 'Carney', issue_date: 'Macdonald', page_num: 'Macdonald' , view_count: 'Macdonald' , download_cont: 'Macdonald' }
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
