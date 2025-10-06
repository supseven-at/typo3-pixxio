<?php

declare(strict_types=1);

namespace Pixxio\PixxioExtension\Listener;

use TYPO3\CMS\Backend\Controller\Event\BeforeFormEnginePageInitializedEvent;

/**
 * @author Georg Großberger <g.grossberger@supseven.at>
 */
class FormEngineInitListener
{
    public function __construct(
        protected readonly \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer,
    ) {
    }

    public function __invoke(BeforeFormEnginePageInitializedEvent $event): void
    {
        $this->pageRenderer->loadJavaScriptModule('@pixxio/pixxio-extension/ScriptSDK.js');
    }
}
