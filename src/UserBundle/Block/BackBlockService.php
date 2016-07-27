<?php

namespace UserBundle\Block;

use Symfony\Component\HttpFoundation\Response;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\BaseBlockService;

class BackBlockService extends BaseBlockService
{
    public function getName()
    {
        return 'Back';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function execute(BlockContextInterface $blockContext, Response $response = NULL)
    {
        // merge settings
        $settings = array_merge($this->getDefaultSettings(), $blockContext->getSettings());

        return $this->renderResponse('UserBundle:Block:block_return.html.twig', array(
            'block'     => $blockContext->getBlock(),
            'settings'  => $settings
            ), $response);
    }
}
