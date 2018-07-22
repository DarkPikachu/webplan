<template>
    <b-container>
        <b-card-group deck class="mb-4">
            <b-card header-bg-variant="warning"
                    header="เอกสาร/แบบฟอร์ม"
                    class="text-left ">
                <b-card-body>
                    <b-tabs>
                        <b-tab active>
                            <template slot="title">
                                <i class="fa fa-paperclip"></i> งานวิเคราะห์นโบบายและแผน
                            </template>
                            <div>
                                <b-table hover :items="items">
                                    <template slot="HEAD_name" slot-scope="data">
                                        <!-- A custom formatted header cell for field 'name' -->
                                        <em>{{data.label}}</em>
                                    </template>
                                    <template slot="FOOT_name" slot-scope="data">
                                        <!-- A custom formatted footer cell  for field 'name' -->
                                        <strong>{{data.label}}</strong>
                                    </template>

                                    <template slot="date" slot-scope="data">
                                        {{data.value}}
                                    </template>
                                    <template slot="title" slot-scope="data" v-html="data.value">
                                        <i class="fa fa-thumb-tack" aria-hidden="true"></i> {{data.value}}
                                    </template>
                                </b-table>
                            </div>

                            <div>
                                <b-table hover :items="items2">
                                    <template slot="date" slot-scope="data">
                                        {{data.value}}
                                    </template>
                                    <template slot="title" slot-scope="data" v-html="data.value">
                                        <i class="fa fa-thumb-tack" aria-hidden="true"></i> {{data.value}}
                                    </template>
                                </b-table>
                            </div>
                        </b-tab>

                        <b-tab>
                            <template slot="title">
                                <i class="fa fa-paperclip"></i> งานวิเคราะห์งบประมาณ
                            </template>
                            <br>I'm the second tab content
                        </b-tab>

                        <b-tab>
                            <template slot="title">
                                <i class="fa fa-paperclip"></i> งานติดตามและประเมินผล
                            </template>
                            <br>Disabled tab!
                        </b-tab>

                        <b-tab>
                            <template slot="title">
                                <i class="fa fa-list-alt"></i> เอกสารเผยแพร่
                            </template>
                            <br>Disabled tab!
                        </b-tab>
                    </b-tabs>

                </b-card-body>
            </b-card>
        </b-card-group>

        <b-card-group deck class="mb-4">
            <b-card header-bg-variant="warning"
                    header="Download แบบฟอร์ม"
                    class="text-left">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
    </b-container>
</template>

<script>
    const items = [
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานจัดการศึกษา' },
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานสนับสนุนการจัดการศึกษาและบริการ' },
        { date: '2017-04-24', title: 'คู่มือการจัดทำแผนยุทธศาสตร์การพัฒนาหน่วยงาน ระยะ 5 ปี (พ.ศ. 2560 - 2564)' },
        { date: '2017-04-22', title: 'รหัสประเด็นยุทธศาสตร์ กลยุทธ์ และมาตรการ ตามแผนยุทธศาสตร์การพัฒนามหาวิทยาลัยราชภัฏเชียงราย ระยะ 5 ปี (พ.ศ. 2560 - 2564)' },
        { date: '2016-04-21', title: 'แบบฟอร์มจุดเน้นการพัฒนาหน่วยงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ.2557-2560) ทบทวนปี พ.ศ.2560 สำหรับหน่วยงานสนับสนุนหน่วยงานจัดการศึกษา' },
        { date: '2016-04-21', title: 'แบบฟอร์มการจัดทำข้อมูลสารสนเทศเพิ่มเติม ของคณะกรรมการติดตาม ตรวจสอบ และประเมินผลงาน มหาวิทยาลัยราชภัฏเชียงราย' },
    ]

    const items2 = [
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานจัดการศึกษา' },
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานจัดการศึกษา' },
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานจัดการศึกษา' },
        { date: '2018-01-04', title: 'แบบฟอร์มรายงานผลการดำเนินงานตามแผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี (พ.ศ. 2557 - 2560) หน่วยงานจัดการศึกษา' },
    ]

    export default {
        data () {
            return {
            items: items,
            items2: items2
            }
        }
    }
</script>
