<template>
    <b-container fluid>
        <b-breadcrumb :items="items"/>
        <b-row class="row-fluid justify-content-center">
            <b-col col lg="8">
                <b-card bg-variant="light"
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
                            <date-picker id="issue_date" name="issue_date" v-model="date" :config="options"></date-picker>
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
    import { Breadcrumb, Card, FormGroup, Table } from 'bootstrap-vue/es/components';
    import datePicker from 'vue-bootstrap-datetimepicker';
    import 'pc-bootstrap4-datetimepicker/build/css/bootstrap-datetimepicker.css';
    Vue.use(datePicker);

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
                fields: [
                    {
                        key: 'order',
                        label: 'ลำดับที่'
                    },{
                        key: 'letter_name',
                        label: 'ชื่อเรื่อง'
                    },{
                        key: 'letter_number',
                        label: 'เลขที่หนังสือ'
                    },{
                        key: 'issue_date',
                        label: 'วันที่ประกาศ'
                    },{
                        key: 'page_count',
                        label: 'หน้า'
                    },{
                        key: 'view_count',
                        label: 'เข้าชม'
                    },{
                        key: 'download_count',
                        label: 'ดาวน์โหลด'
                    }
                ],
                table_items: [
                    { isActive: true, order: 1, letter_name: 'บัญชีนวัตกรรมไทย', letter_number: 'นร 0731.2/ว 123', issue_date:'22 ส.ค. 2561', page_count: 1, view_count: 55, download_count:2 },
                    { isActive: false, order: 2, letter_name: 'แจ้งรายชื่อผู้เข้ารับการศึกษาอบรมหลักสูตรนักบริหารการงบประมาณระดับกลาง (นงก.) รุ่นที่ 1', letter_number: 'นร 0734/ว 117', issue_date:'22 ส.ค. 2561', page_count: 1, view_count: 55, download_count:2 },
                    { isActive: false, order: 3, letter_name: 'เรื่อง แจ้งรายชื่อผู้เข้ารับการศึกษาอบรมหลักสูตรนักบริหารการงบประมาณระดับกลาง (นงก.) รุ่นที่ 1', letter_number: 'นร 0734/ว 116', issue_date:'22 ส.ค. 2561', page_count: 1, view_count: 55, download_count:2 },
                    { isActive: true, order: 4, letter_name: '	เรื่อง การขยายระยะเวลาก่อหนี้ผูกพันงบประมาณรายจ่ายเพิ่มเติม ประจำปีงบประมาณ พ.ศ. ๒๕๖๑', letter_number: 'นร ๐๗๐๒/ว ๑๑๓', issue_date:'22 ส.ค. 2561', page_count: 1, view_count: 55, download_count:2 }
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
