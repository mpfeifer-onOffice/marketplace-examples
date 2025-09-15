<?php

require __DIR__ . '/../../vendor/autoload.php';

use onOffice\MarketplaceExamples\ProviderUnlock\OnOfficeUnlockProviderIFrame;

$iframe = new OnOfficeUnlockProviderIFrame();
$iframe->createHtmlCode();