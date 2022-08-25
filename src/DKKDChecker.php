<?php

namespace Ohmygodvt95\DKKDChecker;

use Illuminate\Support\Facades\Http;

class DKKDChecker
{
    public static ?DKKDChecker $instance = null;

    public mixed $token = null;

    /**
     * @return mixed|null
     */
    public function token()
    {
        if ($this->token) {
            return $this->token;
        }

        $body = Http::withOptions([
            'verify' => false,
        ])->get(config('dkkd-checker.token.endpoint'))->body();
        if (preg_match(config('dkkd-checker.token.regex'), $body, $matches) === 1) {
            $this->token = $matches[1];
        }

        return $this->token;
    }

    /**
     * @param $searchTerm
     * @return array|mixed
     */
    public function getCompanyInfo(string $searchTerm)
    {
        return Http::withOptions([
            'verify' => false,
        ])->post(config('dkkd-checker.search.endpoint'), [
            'searchField' => $searchTerm,
            'h' => $this->token(),
        ])->json('d');
    }

    /**
     * Search for company information on company portal by keywords
     *
     * @param  string  $searchTerm
     * @return array
     */
    public static function search(string $searchTerm)
    {
        if (! isset(static::$instance)) {
            static::$instance = new DKKDChecker();
        }

        return static::$instance->getCompanyInfo($searchTerm);
    }
}
