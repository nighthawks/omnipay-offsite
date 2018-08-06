<?php

namespace Omnipay\Offsite;


use Omnipay\Common\Message\AbstractResponse;

class PurchaseResponse extends AbstractResponse
{

    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return true;
    }
    /**
     * Gets the redirect target url.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->getData()['returnUrl'];
    }

    /**
     * @return bool
     */
    public function isRedirect()
    {
        return true;
    }
}
