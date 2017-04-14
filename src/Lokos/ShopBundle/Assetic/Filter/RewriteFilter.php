<?php
/**
 * Assetic filter for rewriting paths of fonts and images
 *
 * PHP version 7.0
 *
 * @package    Mindk\PublishBundle\Assetic\Filter
 * @author     Maxim Lyatsky <mlyatsky@mindk.com>
 * @copyright  2011-2016 mindk (http://mindk.com). All rights reserved.
 * @license    http://mindk.com Commercial
 * @link       http://mindk.com
 */

namespace Lokos\ShopBundle\Assetic\Filter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\BaseCssFilter;

/**
 * Class RewriteFilter
 *
 * @package Mindk\PublishBundle\Assetic\Filter
 */
class RewriteFilter extends BaseCssFilter
{
    /**
     * Filters an asset after it has been loaded.
     *
     * @param AssetInterface $asset An asset
     */
    public function filterLoad(AssetInterface $asset)
    {
        // Implement filterLoad() method.
    }

    /**
     * Filters an asset just before it's dumped.
     *
     * @param AssetInterface $asset An asset
     */
    public function filterDump(AssetInterface $asset)
    {
        $targetPath = '/bundles/lokosshop';

        $content = $this->filterReferences(
            $asset->getContent(),
            function ($matches) use ($targetPath) {
                $url = $matches['url'];

                if (strpos($url, 'http') === 0) {
                    return 'url("'.$url.'")';
                }

                if (strpos($url, '../') === 0 && (strpos($url, '/images/') !== false)) {
                    $path = $targetPath.substr($url, strpos($url, '/images/'));

                    return str_replace($url, $path, $matches[0]);
                }

                if (strpos($url, '../') === 0 && (strpos($url, '/fonts/') !== false)) {
                    $path = $targetPath.substr($url, strpos($url, '/fonts/'));

                    return str_replace($url, $path, $matches[0]);
                }

                return $url;
            }
        );

        $asset->setContent($content);
    }
}
