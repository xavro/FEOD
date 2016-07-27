<?php

namespace FeodBundle\Entity;

/**
 * Search
 *
 */
class Search
{
    /**
     * @var string
     *
     */
    private $expression;

    /**
     * @var string
     *
     */
    private $type;

    /**
     * Set expression
     *
     * @param string $expression
     * @return Search
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;

        return $this;
    }

    /**
     * Get expression
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Search
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
