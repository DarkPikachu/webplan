<?php
namespace App\Services;

class UrlService{

    public function getJsonUrl(){
        $urlStr = '{
            "home": "'.url("/").'",
            "main_menu": {
                "about": {
                    "label" : "เกี่ยวกับหน่วยงาน",
                    "url" : "'.url("/division/about").'" 
                },
                "org_chart": {
                    "label" : "โครงสร้างหน่วยงาน",
                    "url" : "'.url("/division/org_chart").'"
                },
                "personnel": {
                    "label" : "บุคลากร",
                    "url" : "'.url("/division/personnel").'"
                },
                "gallery": {
                    "label" : "ประมวลภาพกิจกรรมหน่วยงาน",
                    "url" : "'.url("gallery").'"
                },
                "sitemap": {
                    "label" : "แผนผังเว็บไซต์",
                    "url" : "'.url("sitemap").'"
                }
            },
            "info_menu": {
                "home": {
                    "label" : "กรอบแผนยุทธศาสตร์การพัฒนา 13 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเพชรบูรณ์",
                    "url" : "'.url("/").'"
                },
                "home1": {
                    "label" : "แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเพชรบูรณ์",
                    "url" : "'.url("/").'"
                },
                "annual_info_university": {
                    "label" : "สารสนเทศ/รายงานประจำปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยราชภัฏเพชรบูรณ์",
                    "url" : "'.url("annual_info_university").'"
                },
                "home3": {
                    "label" : "แผนยุทธศาสตร์การพัฒนา ระยะ 4 ปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน",
                    "url" : "'.url("/").'"
                },
                "home4": {
                    "label" : "แผนยุทธศาสตร์การพัฒนา ระยะ 2+5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน",
                    "url" : "'.url("/").'"
                },
                "annual_info_plan": {
                    "label" : "แผนปฏิบัติการ/รายงานประจำปี<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองนโยบายและแผน",
                    "url" : "'.url("annual_info_plan").'"
                }
            },
            "download_menu": {
                "circular": {
                    "label" : "หนังสือเวียน",
                    "url" : "'.url("/download/circular").'"
                },
                "issue": "'.url("/").'",
                "home": "'.url("/").'",
                "form_4": "'.url("/").'",
                "form_5": "'.url("/").'",
                "form_6": "'.url("/").'"
            }
        }';

        //echo $urlStrl;

        return json_encode(json_decode($urlStr));
    }

    public function getJsonInfoUrl(){
        $urlStr = '{
            "gov": "'.url("/").'",
            "univer": {
                "about": "'.url("about").'",
                "org_chart": "'.url("org_chart").'",
                "personnel": "'.url("personnel").'",
                "gallery": "'.url("gallery").'",
                "sitemap": "'.url("sitemap").'"
            },
            "plan": {
                "home": "'.url("/").'",
                "home1": "'.url("/").'",
                "annual_info_university": "'.url("annual_info_university").'",
                "home3": "'.url("/").'",
                "home4": "'.url("/").'",
                "annual_info_plan": "'.url("annual_info_plan").'"
            }
        }';

        return json_encode(json_decode($urlStr));
    }
}