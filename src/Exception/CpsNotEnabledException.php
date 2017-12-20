<?php

namespace Apigee\Edge\Exception;

use Throwable;

/**
 * Class CpsNotEnabledException.
 *
 * For those cases if someone tries to add a CPS limit to an API call but the feature is not enabled on the
 * organization on Edge.
 *
 * @author Dezső Biczó <mxr576@gmail.com>
 *
 * @see https://docs.apigee.com/api-services/content/api-reference-getting-started#cps
 */
class CpsNotEnabledException extends \RuntimeException
{
    /**
     * @var string
     */
    protected $organization;

    /**
     * CpsNotEnabledException constructor.
     *
     * @param string $organization
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $organization, $code = 0, Throwable $previous = null)
    {
        $this->organization = $organization;
    }

    public function __toString()
    {
        return sprintf('Core Persistence Services is not enabled on %s organization.', $this->organization);
    }
}