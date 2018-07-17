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
        <b-row fluid style="background-color:#ccc; height:50px;" >
            <!--<div class="span12" style="background-color:#ccc;">
                <div class="row-fluid" style="background-color:#ccc; height:50px;" id="top-menu">
                    <div class="span1"></div>
                    <div class="span11" style="text-align:right; margin-right:0px; background-color:#ccc;">-->
                    <b-col  class="text-right">
                        <b-navbar toggleable type="light" variant="faded" right>
                            <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>
                            <b-collapse is-nav id="nav_dropdown_collapse" order="*">
                                <b-navbar-nav>
                                    <b-nav-item href="#" ><i class="fa fa-home"></i> Home</b-nav-item>
                                    <!-- Navbar dropdowns -->
                                    <b-nav-item-dropdown text="<i class='fa fa-th-lis'></i> เมนูหลัก" left>
                                        <b-dropdown-item href="#"> เกี่ยวกับหน่วยงาน</b-dropdown-item>
                                        <b-dropdown-item href="#"> โครงสร้างหน่วยงาน</b-dropdown-item>
                                        <b-dropdown-item href="#"> บุคลากร</b-dropdown-item>
                                        <b-dropdown-item href="#"> ประมวลภาพกิจกรรมหน่วยงาน</b-dropdown-item>
                                        <b-dropdown-item href="#"> แผนผังเว็บไซต์</b-dropdown-item>
                                    </b-nav-item-dropdown>

                                    <!-- Navbar dropdowns -->
                                    <b-nav-item-dropdown text="ข้อมูลพิ้นฐาน">
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> กรอบแผนยุทธศาสตร์การพัฒนา 13 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> สารสนเทศ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 2+5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                                        <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนปฏิบัติการ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                    
                                    <!-- Navbar dropdowns -->
                                    <b-nav-item-dropdown text="Download">
                                        <b-dropdown-item href="#"> ประกาศ/คำสั่ง</b-dropdown-item>
                                        <b-dropdown-item href="#"> เอกสารเผยแพร่</b-dropdown-item>
                                        <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์นโยบายและแผน</b-dropdown-item>
                                        <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์งบประมาณ</b-dropdown-item>
                                        <b-dropdown-item href="#"> แบบฟอร์มงานติดตามและประเมินผล</b-dropdown-item>
                                        <b-dropdown-item href="#"> </b-dropdown-item>
                                    </b-nav-item-dropdown>

                                    <b-nav-item href="#"><i class="fa fa-phone"></i> เบอร์โทรติดต่อ</b-nav-item>

                                    <b-nav-item-dropdown text="Plan Application" right>
                                        <b-dropdown-item href="#">Account</b-dropdown-item>
                                        <b-dropdown-item href="#">Settings</b-dropdown-item>
                                    </b-nav-item-dropdown>
                                </b-navbar-nav>
                            </b-collapse>
                        </b-navbar>
                    </b-col>
                    <!--</div>
                    <div class="row-fluid" style="background-color:#666; height:5px">
                        <div class="span12"></div>
                    </div>
                </div>
            </div>-->
        </b-row>
        <b-row fluid style="background-color:#666; height:5px"></b-row>
    </b-container>
</template>

<script>
import { Navbar } from 'bootstrap-vue/es/components';
import { Layout } from 'bootstrap-vue/es/components';

Vue.use(Navbar);
Vue.use(Layout);

export default {

}
</script>
