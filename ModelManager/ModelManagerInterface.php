<?php

namespace Aimir\StripeBundle\ModelManager;

use Aimir\StripeBundle\Model\StripeModelInterface;
use Stripe\Object as StripeObject;

interface ModelManagerInterface
{
    /**
     * Create new model object
     *
     * @return StripeModelInterface
     */
    public function create();

    /**
     * Retrieve model object
     *
     * @param string $stripeId
     *
     * @return StripeModelInterface
     */
    public function retrieve($stripeId);

    /**
     * Create|Update stripe model from stripe object
     *
     * @param StripeObject $stripeObject
     * @param bool $flush Flush data to storage
     *
     * @return StripeModelInterface
     */
    public function save(StripeObject $stripeObject, $flush = false);

    /**
     * Remove stripe model by stripe ID
     *
     * @param string $stripeId
     * @param bool $flush
     *
     * @return bool
     */
    public function remove($stripeId, $flush = false);
}
