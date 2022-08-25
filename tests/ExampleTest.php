<?php

use Ohmygodvt95\DKKDChecker\DKKDChecker;

it('can get token', function () {
    $checker = new DKKDChecker();
    $token = $checker->token();
    expect($token)->toBeString();
});

it('can search company information', function () {
    $company = DKKDChecker::search('0101659906');
    expect(count($company))->toEqual(3);
    expect($company[0]['Name'])->toEqual('CÔNG TY CỔ PHẦN GMO-Z.COM RUNSYSTEM');
});
