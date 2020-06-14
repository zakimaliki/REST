<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $response = [
            [
                "id" => 1,
                "cate" => "BAYI",
                "pricebefore" => "14.900",
                "priceafter" => "19.900",
                "user" => "938",
                "fiture" => [
                    ["name"=>"0.5X RESOURCE POWER"],
                    ["name"=>"500 MB Disk Space"],
                    ["name"=>"Unlimited Bandwidth"],
                    ["name"=>"1 Domain"],
                    ["name"=>"Instant Backup"],
                    ["name"=>"Unlimited SSL Gratis Selamanya"],
                ]
            ],
            [
                "id" => 2,
                "cate" => "PELAJAR",
                "pricebefore" => "46.900",
                "priceafter" => "23.450",
                "user" => "4.168",
                "fiture" => [
                    ["name"=>"1X RESOURCE POWER"],
                    ["name"=>"Unlimited Disk Space"],
                    ["name"=>"Unlimited Bandwidth"],
                    ["name"=>"10 Addon Domain"],
                    ["name"=>"Instant Backup"],
                    ["name"=>"Domain Gratis Selamanya"],
                    ["name"=>"Unlimited SSL Gratis Selamanya"],
                ]
            ],
            [
                "id" => 3,
                "cate" => "PERSONAL",
                "pricebefore" => "58.900",
                "priceafter" => "38.900",
                "user" => "10.017",
                "fiture" => [
                    ["name"=>"2X RESOURCE POWER"],
                    ["name"=>"Unlimited Disk Space"],
                    ["name"=>"Unlimited Bandwidth"],
                    ["name"=>"POP3 Email"],
                    ["name"=>"Unlimited Databases"],
                    ["name"=>"Instant Backup"],
                    ["name"=>"Domain Gratis Selamanya"],
                    ["name"=>"Unlimited SSL Gratis Selamanya"],
                    ["name"=>"Private Name Server"],
                    ["name"=>"SpamAssasin Mail Protection"],
                ]
            ],
            [
                "id" => 4,
                "cate" => "BISNIS",
                "pricebefore" => "14.900",
                "priceafter" => "19.900",
                "user" => "938",
                "fiture" => [
                    ["name"=>"3X RESOURCE POWER"],
                    ["name"=>"Unlimited Disk Space"],
                    ["name"=>"Unlimited Bandwidth"],
                    ["name"=>"POP3 Email"],
                    ["name"=>"Unlimited Databases"],
                    ["name"=>"Magis Auto Backup & Restore"],
                    ["name"=>"Domain Gratis Selamanya"],
                    ["name"=>"Unlimited SSL Gratis Selamanya"],
                    ["name"=>"Private Name Server"],
                    ["name"=>"Prioritas Layanan Support"],
                    ["name"=>"SpamExpert Pro Mail Protection"],
                ]
            ]
        ];

        return response()->json($response);
    }
}
