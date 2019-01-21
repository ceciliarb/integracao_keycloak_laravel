<?php

return [
    'authServerUrl'         => 'http://keycloak.qa.pbh/auth',
    'realm'                 => 'teste_cecilia',
    'clientId'              => 'teste2_dsv',
    'clientSecret'          => '4f893a00-22d2-466f-95ed-2dfd8b172c6d',
    'rsa_public_key'        => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAk0byyaYIH1kJPRVE74kFIjAp/9e5QXlcAwfIkNi4G/SMlYHWaN+ZoJVZJMG0SqNsivB+mVqxdxR2ZqPX4giQGFuYV7ySfJENmPjH1M9vH6P+Ddd1CfG4u44XVrQKLGV0EQKgIBB3a5rNmSo3vRncAbGzorqWsVJoqZzxCqOtHoTTvZwTix+apSpv/imz9R55aBcMjF1fwAwf0GANgIijIvddrMEGtJpMQ1tiP2uvf1lb0I5n91vyLqGFrsUdi+xYMGgqpcejIVNyYNpyxXllZFCa1ydmG6zseRa/FjCDDvzovXUcpkAliPDNqiIBLCiZ3Kgych3JvwxJBu1Hn0Sz+wIDAQAB',
    'redirectUri'           => 'http://localhost:7000/login',
    'redirectLogoutUri'     => 'http://localhost:7000',
    'scope'                 => 'openid,email,name,profile',
];
