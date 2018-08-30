<template>
<b-container fluid style="padding-top: 20px; margin-bottom: 20px;">
    <!-- Header -->
    <b-row fluid>
        <b-col cols="1" md="1"></b-col>
        <b-col cols="5" md="5"><img src="http://plan.crru.ac.th/web_planning/img/head_logo02.png"></b-col>
        <b-col cols="6" md="6" align-v="center" class="text-right" style="padding-right: 30px;">
            <a href="#" target="_blank"><img src="http://plan.crru.ac.th/web_planning/img/crru.png"></a>
            <a href="#" target="_blank"><img src="http://plan.crru.ac.th/web_planning/img/fb.png"></a>
        </b-col>
    </b-row>

    <!-- Navbar -->
    <b-row fluid style="background-color:#ccc; height:50px;">
        <b-col class="text-right">
            <b-navbar toggleable type="light" variant="faded" size="lg" right>
                <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>
                <b-collapse is-nav id="nav_dropdown_collapse" order="*">
                    <b-navbar-nav v-if="urlLink.main_menu && urlLink.info_menu">
                        <!-- Home menu -->
                        <b-nav-item v-bind:href="urlLink.home"><i class="fa fa-home"></i> Home</b-nav-item>

                        <!-- Navbar dropdowns -->
                        <b-nav-item-dropdown text="<i class='fa fa-th-lis'></i> เมนูหลัก" left>
                            <b-dropdown-item v-bind:href="urlLink.main_menu.about.url"> {{ urlLink.main_menu.about.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.main_menu.org_chart.url"> {{ urlLink.main_menu.org_chart.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.main_menu.personnel.url"> {{ urlLink.main_menu.personnel.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.main_menu.gallery.url"> {{ urlLink.main_menu.gallery.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.main_menu.sitemap.url"> {{ urlLink.main_menu.sitemap.label }}</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <!-- Navbar dropdowns -->
                        <b-nav-item-dropdown text="ข้อมูลพิ้นฐาน">
                            <b-dropdown-item v-bind:href="urlLink.info_menu.home.url" v-html="urlLink.info_menu.home.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.home.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.info_menu.home1.url" v-html="urlLink.info_menu.home1.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.home1.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.info_menu.annual_info_university.url" v-html="urlLink.info_menu.annual_info_university.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.annual_info_university.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.info_menu.home3.url" v-html="urlLink.info_menu.home3.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.home3.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.info_menu.home4.url" v-html="urlLink.info_menu.home4.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.home4.label }}</b-dropdown-item>
                            <b-dropdown-item v-bind:href="urlLink.info_menu.annual_info_plan.url" v-html="urlLink.info_menu.annual_info_plan.label"> <i class="fa fa-caret-right"></i> {{ urlLink.info_menu.annual_info_plan.label }}</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <!-- Navbar dropdowns -->
                        <b-nav-item-dropdown text="Download">
                            <b-dropdown-item v-bind:href="urlLink.download_menu.circular.url"> {{ urlLink.download_menu.circular.label }}</b-dropdown-item>
                            <b-dropdown-item href="#"> ประกาศ/คำสั่ง</b-dropdown-item>
                            <b-dropdown-item href="#"> เอกสารเผยแพร่</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์นโยบายและแผน</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์งบประมาณ</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานติดตามและประเมินผล</b-dropdown-item>
                            <b-dropdown-item href="#"> </b-dropdown-item>
                        </b-nav-item-dropdown>

                        <b-nav-item v-bind:href="urlLink.contact_menu.url" ><i class="fa fa-phone"></i> {{ urlLink.contact_menu.label }}</b-nav-item>

                        <b-nav-item-dropdown text="Plan Application" right>
                            <b-dropdown-item href="#">Account</b-dropdown-item>
                            <b-dropdown-item href="#">Settings</b-dropdown-item>
                        </b-nav-item-dropdown>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </b-col>
    </b-row>
    <b-row fluid style="background-color:#666; height:5px"></b-row>
</b-container>
</template>

<script>
import {Navbar} from 'bootstrap-vue/es/components';
import {Layout} from 'bootstrap-vue/es/components';

Vue.use(Navbar);
Vue.use(Layout);

export default {
    data() {
        return {
            urlLink: {}
        }
    },
    //props: ['urlhome', 'urlabout','url'],
    props: ['url'],
    mounted() {
        // Do something useful with the data in the template
        //console.log(this.url)
        this.urlLink = JSON.parse(this.url);
        //console.log(this.urlLink)
    },
}
</script>
