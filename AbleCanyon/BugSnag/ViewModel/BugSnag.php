<?php
declare(strict_types=1);

namespace AbleCanyon\BugSnag\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class BugSnag implements ArgumentInterface
{
    const CONFIG_APIKEY_PATH = 'dev/bugsnag/api_key';

    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getApiKey(): string {
        return $this->scopeConfig->getValue(self::CONFIG_APIKEY_PATH);
    }
}
