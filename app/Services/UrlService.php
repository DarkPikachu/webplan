<?php
namespace App\Services;

class UrlService{

    public function getJsonUrl(){
        $urlStr = '{
            "home": "'.url("/").'",
            "main_menu": {
                "about": "'.url("about").'",
                "org_chart": "'.url("org_chart").'",
                "personnel": "'.url("personnel").'",
                "gallery": "'.url("gallery").'",
                "sitemap": "'.url("sitemap").'"
            },
            "info_menu": {
                "home": "'.url("/").'",
                "home1": "'.url("/").'",
                "annual_info_university": "'.url("annual_info_university").'",
                "home3": "'.url("/").'",
                "home4": "'.url("/").'",
                "annual_info_plan": "'.url("annual_info_plan").'"
            },
            "download_menu": {
                "issue": "'.url("/").'",
                "home": "'.url("/").'",
                "form_4": "'.url("/").'",
                "form_5": "'.url("/").'",
                "form_6": "'.url("/").'"
            }
        }';

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