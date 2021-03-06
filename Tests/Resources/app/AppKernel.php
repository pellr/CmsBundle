<?php

use Symfony\Cmf\Component\Testing\HttpKernel\TestKernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends TestKernel
{
    public function configure()
    {
        $this->requireBundleSets(array(
            'default',
            'phpcr_odm',
            'sonata_admin_phpcr',
        ));

        $this->addBundles(array(
            new \Pellr\CmsBundle\PellrCmsBundle(),
            new \Symfony\Cmf\Bundle\MenuBundle\CmfMenuBundle(),
            new \Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle(),
            new \Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle(),
            new \Symfony\Cmf\Bundle\ContentBundle\CmfContentBundle(),
        ));
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.php');
    }
}
