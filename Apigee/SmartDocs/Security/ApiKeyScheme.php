<?php

namespace Apigee\SmartDocs\Security;

/**
 * Class ApiKeyScheme
 * @package Apigee\SmartDocs\Security
 */
class ApiKeyScheme extends SecurityScheme
{
    /**
     * @var string
     */
    protected $paramName;

    /**
     * @var string
     */
    protected $in;

    /**
     * Gets the parameter name identifying the API key.
     *
     * @return string
     */
    public function getParamName()
    {
        return $this->paramName;
    }

    /**
     * Sets the parameter name identifying the API key.
     *
     * @param string $name
     */
    public function setParamName($name)
    {
        $this->paramName = $name;
    }

    /**
     * Returns how the API key is transmitted (header, query, etc.).
     *
     * @return string
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Sets how the API key is transmitted (header, query, etc.).
     *
     * @param string $in
     */
    public function setIn($in) {
        // TODO: validate $in
        $this->in = $in;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'APIKEY';
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return parent::toArray() + array(
            'paramName' => $this->paramName,
            'in' => $this->in,
        );
    }

}