<template>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span1"></div>
      <div class="span5" align="left" style="margin-left:0px"><br><img src="img/head_logo02.png"></div>
      <div class="span6" align="right" style="margin-left:0px"><br><a href="http://www.pcru.ac.th" target="_blank"><img src="img/crru.png"> </a> <a href="https://www.facebook.com/%E0%B8%81%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%81%E0%B8%9C%E0%B8%99-%E0%B8%A1%E0%B8%A3%E0%B8%8A%E0%B8%A3-1128441437167082/" target="_blank"><img src="img/fb.png"></a></div>
    </div>
    
    <div class="row" style="background-color:#ccc; height:50px; margin-top:1px;">
      <div class="span12" style="background-color:#ccc;">
      <!-- MenuBar -->
        <div class="row-fluid" style="background-color:#ccc; height:50px;" id="top-menu">
          <div class="span1"></div>
          <div class="span11" style="text-align:right; margin-right:0px; background-color:#ccc;">
            <ul class="nav navbar-top-links navbar-right navbar-expand-lg">
                  <li class="dropdown">
                    <a href="index.php"> <i class="fa fa-home"></i> HOME </a> 
                  </li>

                  <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                      <i class="fa fa-th-lis"></i> เมนูหลัก <i class="fa fa-angle-down"></i> 
                    </a>

                    <ul class="dropdown-menu dropdown-tasks">
                      <li>
                        <div><a href="about.php"> เกี่ยวกับหน่วยงาน </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="struc.php"> โครงสร้างหน่วยงาน </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="personal.php"> บุคลากร </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="plan_gallery/show_all.php"> ประมวลภาพกิจกรรมหน่วยงาน </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="#"> แผนผังเว็บไซต์ </a></div>
                      </li>
                    </ul>
                  </li>
                      
                  <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                      <i class="fa fa-book"></i> ข้อมูลพิ้นฐาน <i class="fa fa-angle-down"></i> 
                    </a>

                    <ul class="dropdown-menu dropdown-tasks">
                      <li>
                        <div><a href="download_plan/plan_infor_univ/13year.pdf" target="_blank"><i class="fa fa-caret-right"></i> กรอบแผนยุทธศาสตร์การพัฒนา 13 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย  </a></div>
                      </li> 
                      <br>

                      <li>
                        <div><a href="download_plan/plan_infor_univ/4Y.pdf" target="_blank"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย </a></div>
                      </li>
                      <br>

                      <li>
                        <div><a href="plan_infor_univ/show_all_nw.php" target="_blank"> <i class="fa fa-caret-right"></i> สารสนเทศ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเชียงราย </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="download_plan/plan_infor_plan/Intelligence(57-60).pdf" target="_blank"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน </a></div>
                      </li>
                      <br>

                      <li>
                        <div><a href="download_plan/plan_infor_plan/2plus5_plan.pdf" target="_blank"> <i class="fa fa-caret-right"></i> แผนยุทธศาสตร์การพัฒนา ระยะ 2+5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน </a></div>
                      </li>
                      <br>
                      <li>
                        <div><a href="plan_infor_plan/show_all_nw.php" target="_blank"> <i class="fa fa-caret-right"></i> แผนปฏิบัติการ/รายงานประจำปี <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน </a></div>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-download"></i> Download <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-tasks">
                      <li>
                        <div><a href="notice.php"> ประกาศ/คำสั่ง </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="notice_dl_publ/show_all_nw.php"> เอกสารเผยแพร่ </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="notice_dl_edu/show_all_nw.php"> แบบฟอร์มงานวิเคราะห์นโยบายและแผน </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="notice_dl_supp/show_all_nw.php"> แบบฟอร์มงานวิเคราะห์งบประมาณ </a></div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div><a href="notice_dl_orther/show_all_nw.php"> แบบฟอร์มงานติดตามและประเมินผล </a></div>
                      </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                  </li>
                      
                  <li class="dropdown"><a href="contact.php" target="_blank"> <i class="fa fa-phone"></i> เบอร์โทรติดต่อ </a> </li>
                    <!-- /.dropdown-tasks -->
                
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-th-large"></i> Plan Application <i class="fa fa-angle-down"></i> </a>
                      <ul class="dropdown-menu dropdown-tasks">
                        <li>
                          <div><a href="http://planning.crru.ac.th/monitoring/" target="_blank">Plan Monitoring System : PMS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบตรวจสอบสถานะเอกสารการขออนุมัติ</a></div>
                        </li> 
                        <li class="divider"></li>
                        <li>
                          <div><a href="http://qas.crru.ac.th/sps/" target="_blank">Strategic Planning and Quality<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assurance System : SPQAS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบแผนจัดการเชิงกลยุทธ์และประกันคุณภาพ</a></div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <div><a href="http://10.2.163.39:81/" target="_blank">Plan Performance System : PPS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบบันทึกการปฏิบัติงาน</a></div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <div><a href="http://planning.crru.ac.th/" target="_blank">CRRU E-Budgeting</a></div>
                        </li>
                        
                        
                      </ul>
                      <!-- /.dropdown-tasks -->
                    </li>
                      
                      <li class="dropdown"> <a href="backOff/login.php" target="_blank"> <i class="fa fa-sign-in"></i> Login </a> </li>
                      
                    </ul>
                    <!-- /.navbar-top-links -->
          </div>
                <!-- /.navbar-static-side -->
        </div>
      </div>
      
    </div>

  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
