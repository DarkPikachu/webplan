<template>
<div class="fluid-width">

    <div class="container-fluid">
        <div class="row-fluid">
        <div class="span1"></div>
        <div class="span5" align="left" style="margin-left:0px"><br><img src="img/head_logo02.png"></div>
        <div class="span6" align="right" style="margin-left:0px"><br><a href="http://www.crru.ac.th" target="_blank"><img src="img/crru.png"> </a> <a href="https://www.facebook.com/%E0%B8%81%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%9C%E0%B8%99-%E0%B8%A1%E0%B8%A3%E0%B8%8A%E0%B8%A3-1128441437167082/" target="_blank"><img src="img/fb.png"></a></div>
        </div>
    </div>

    <div class="fluid-width">
        <div class="span12" style="background-color:#ccc;">
            <div class="row-fluid" style="background-color:#ccc; height:50px;" id="top-menu">
                <div class="span1"></div>
                <div class="span11" style="text-align:right; margin-right:0px; background-color:#ccc;">
                    <b-navbar type="dark" variant="primary" toggleable>
                        <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>
                        <b-collapse is-nav id="nav_dropdown_collapse">
                        <b-navbar-nav>
                            <b-nav-item href="#"><i class="fa fa-home"></i> Home</b-nav-item>
                            <!-- Navbar dropdowns -->
                            <b-nav-item-dropdown text="<i class='fa fa-th-lis'></i> เมนูหลัก" left>
                            <b-dropdown-item href="#"> เกี่ยวกับหน่วยงาน</b-dropdown-item>
                            <li class="divider"></li>
                            <b-dropdown-item href="#"> โครงสร้างหน่วยงาน</b-dropdown-item>
                            <li class="divider"></li>
                            <b-dropdown-item href="#"> บุคลากร</b-dropdown-item>
                            <b-dropdown-item href="#"> ประมวลภาพกิจกรรมหน่วยงาน</b-dropdown-item>
                            <b-dropdown-item href="#"> แผนผังเว็บไซต์</b-dropdown-item>
                            </b-nav-item-dropdown>

                            <!-- Navbar dropdowns -->
                            <b-nav-item-dropdown text="ข้อมูลพิ้นฐาน" left>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> กรอบแผนยุทธศาสตร์การพัฒนา 13 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> สารสนเทศ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย</b-dropdown-item>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 2+5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                            <b-dropdown-item href="#"> <i class="fa fa-caret-right"></i> แผนปฏิบัติการ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน</b-dropdown-item>
                            </b-nav-item-dropdown>
                            
                            <!-- Navbar dropdowns -->
                            <b-nav-item-dropdown text="Download" left>
                            <b-dropdown-item href="#"> ประกาศ/คำสั่ง</b-dropdown-item>
                            <b-dropdown-item href="#"> เอกสารเผยแพร่</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์นโยบายและแผน</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานวิเคราะห์งบประมาณ</b-dropdown-item>
                            <b-dropdown-item href="#"> แบบฟอร์มงานติดตามและประเมินผล</b-dropdown-item>
                            <b-dropdown-item href="#"> </b-dropdown-item>
                            </b-nav-item-dropdown>

                            <b-nav-item href="#"><i class="fa fa-phone"></i> เบอร์โทรติดต่อ</b-nav-item>

                            <b-nav-item-dropdown text="User" right>
                            <b-dropdown-item href="#">Account</b-dropdown-item>
                            <b-dropdown-item href="#">Settings</b-dropdown-item>
                            </b-nav-item-dropdown>
                        </b-navbar-nav>
                        </b-collapse>
                    </b-navbar>
                </div>
                <div class="row-fluid" style="background-color:#666; height:5px">
                    <div class="span12"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
