<?php
/**
 * Created by PhpStorm.
 * User: dhaval
 * Date: 8/5/18
 * Time: 6:42 PM
 */

namespace App\Billing;

class Stripe{
    protected $key;
    public function __construct($key)
    {
        $this->key = $key;
    }
    
}