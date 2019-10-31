<?php

namespace App\Service;

use \League\OAuth2\Client\Provider;

const url = 'https://coyotraining.coyocloud.com';
const username = 'RL';
const pass = 'demo';
const secret = '4dc7aca3-7a59-41b1-8dac-1a84f798a7f1';

class Authenticate {
    /**
     *
     */
    public function demo(){

        $provider = new GenericProvider([
            'clientId'                => username,    // The client ID assigned to you by the provider
            'clientSecret'            => secret,   // The client password assigned to you by the provider
            'redirectUri'             => '/',
            'urlAccessToken'          => url . '/oauth2/token'
        ]);

        try {

            // Try to get an access token using the resource owner password credentials grant.
            $accessToken = $provider->getAccessToken('password', [
                'username' => username,
                'password' => pass
            ]);

        } catch (IdentityProviderException $e) {

            // Failed to get the access token
            exit($e->getMessage());

        }
    }
}