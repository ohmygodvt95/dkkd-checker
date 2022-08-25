<?php

// config for Ohmygodvt95/DKKDChecker
return [
    'token' => [
        'endpoint' => 'https://dichvuthongtin.dkkd.gov.vn/inf/default.aspx',
        'regex' => '/id=\"ctl00_hdParameter\".+value=\"([a-zA-Z0-9\-]+)\"/m',
    ],
    'search' => [
        'endpoint' => 'https://dichvuthongtin.dkkd.gov.vn/inf/Public/Srv.aspx/GetSearch',
    ],
];
