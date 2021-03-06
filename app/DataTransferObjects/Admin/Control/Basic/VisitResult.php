<?php
declare(strict_types = 1);

namespace App\DataTransferObjects\Admin\Control\Basic;

use App\Services\Response\JsonRespondent;

class VisitResult implements JsonRespondent
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string[]
     */
    private $keywords;

    /**
     * @var string
     */
    private $accessMode;

    /**
     * @var bool
     */
    private $registerEnabled;

    /**
     * @var bool
     */
    private $sendActivation;

    /**
     * @var bool
     */
    private $customRedirectAfterRegistrationEnabled;

    /**
     * @var string|null
     */
    private $customRedirectAfterRegistrationUrl;

    /**
     * @var int
     */
    private $maxSkinFileSize;

    /**
     * @var int
     */
    private $maxCloakFileSize;

    /**
     * @var array
     */
    private $skinSizes;

    /**
     * @var array
     */
    private $skinSizesHd;

    /**
     * @var array
     */
    private $cloakSizes;

    /**
     * @var array
     */
    private $cloakSizesHd;

    /**
     * @var bool
     */
    private $skinEnabled;

    /**
     * @var bool
     */
    private $hdSkinEnabled;

    /**
     * @var bool
     */
    private $cloakEnabled;

    /**
     * @var bool
     */
    private $hdCloakEnabled;

    /**
     * @var int
     */
    private $catalogPerPage;

    /**
     * @var string
     */
    private $sortProductsBy;

    /**
     * @var bool
     */
    private $sortProductsDescending;

    /**
     * @var bool
     */
    private $newsEnabled;

    /**
     * @var int
     */
    private $newsPerPortion;

    /**
     * @var bool
     */
    private $monitoringEnabled;

    /**
     * @var float
     */
    private $monitoringRconTimeout;

    /**
     * @var string
     */
    private $monitoringRconCommand;

    /**
     * @var string
     */
    private $monitoringRconResponsePattern;

    /**
     * @var bool
     */
    private $maintenanceModeEnabled;

    /**
     * @param string $name
     *
     * @return VisitResult
     */
    public function setName(string $name): VisitResult
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return VisitResult
     */
    public function setDescription(?string $description): VisitResult
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string[] $keywords
     *
     * @return VisitResult
     */
    public function setKeywords(array $keywords): VisitResult
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @param $accessMode
     *
     * @return VisitResult
     */
    public function setAccessMode($accessMode): VisitResult
    {
        $this->accessMode = $accessMode;

        return $this;
    }

    /**
     * @param bool $registerEnabled
     *
     * @return VisitResult
     */
    public function setRegisterEnabled(bool $registerEnabled): VisitResult
    {
        $this->registerEnabled = $registerEnabled;

        return $this;
    }

    /**
     * @param bool $sendActivation
     *
     * @return VisitResult
     */
    public function setSendActivationEnabled(bool $sendActivation): VisitResult
    {
        $this->sendActivation = $sendActivation;

        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return VisitResult
     */
    public function setCustomRedirectAfterRegistrationEnabled(bool $enabled): VisitResult
    {
        $this->customRedirectAfterRegistrationEnabled = $enabled;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return VisitResult
     */
    public function setCustomRedirectAfterRegistrationUrl(?string $url): VisitResult
    {
        $this->customRedirectAfterRegistrationUrl = $url;

        return $this;
    }

    /**
     * @param int $size
     *
     * @return VisitResult
     */
    public function setMaxSkinFileSize(int $size): VisitResult
    {
        $this->maxSkinFileSize = $size;

        return $this;
    }

    /**
     * @param int $size
     *
     * @return VisitResult
     */
    public function setMaxCloakFileSize(int $size): VisitResult
    {
        $this->maxCloakFileSize = $size;

        return $this;
    }


    /**
     * @param array $skinSizes
     *
     * @return VisitResult
     */
    public function setSkinSizes(array $skinSizes): VisitResult
    {
        $this->skinSizes = $skinSizes;

        return $this;
    }

    /**
     * @param array $skinSizesHd
     *
     * @return VisitResult
     */
    public function setSkinSizesHd(array $skinSizesHd): VisitResult
    {
        $this->skinSizesHd = $skinSizesHd;

        return $this;
    }

    /**
     * @param array $cloakSizes
     *
     * @return VisitResult
     */
    public function setCloakSizes(array $cloakSizes): VisitResult
    {
        $this->cloakSizes = $cloakSizes;

        return $this;
    }

    /**
     * @param array $cloakSizesHd
     *
     * @return VisitResult
     */
    public function setCloakSizesHd(array $cloakSizesHd): VisitResult
    {
        $this->cloakSizesHd = $cloakSizesHd;

        return $this;
    }

    /**
     * @param bool $skinEnabled
     *
     * @return VisitResult
     */
    public function setSkinEnabled(bool $skinEnabled): VisitResult
    {
        $this->skinEnabled = $skinEnabled;

        return $this;
    }

    /**
     * @param bool $hdSkinEnabled
     *
     * @return VisitResult
     */
    public function setHdSkinEnabled(bool $hdSkinEnabled): VisitResult
    {
        $this->hdSkinEnabled = $hdSkinEnabled;

        return $this;
    }

    /**
     * @param bool $cloakEnabled
     *
     * @return VisitResult
     */
    public function setCloakEnabled(bool $cloakEnabled): VisitResult
    {
        $this->cloakEnabled = $cloakEnabled;

        return $this;
    }

    /**
     * @param bool $hdCloakEnabled
     *
     * @return VisitResult
     */
    public function setHdCloakEnabled(bool $hdCloakEnabled): VisitResult
    {
        $this->hdCloakEnabled = $hdCloakEnabled;

        return $this;
    }

    /**
     * @param int $catalogPerPage
     *
     * @return VisitResult
     */
    public function setCatalogPerPage(int $catalogPerPage): VisitResult
    {
        $this->catalogPerPage = $catalogPerPage;

        return $this;
    }

    /**
     * @param string $sortProductsBy
     *
     * @return VisitResult
     */
    public function setSortProductsBy(string $sortProductsBy): VisitResult
    {
        $this->sortProductsBy = $sortProductsBy;

        return $this;
    }

    /**
     * @param bool $sortProductsDescending
     *
     * @return VisitResult
     */
    public function setSortProductsDescending(bool $sortProductsDescending): VisitResult
    {
        $this->sortProductsDescending = $sortProductsDescending;

        return $this;
    }

    /**
     * @param bool $newsEnabled
     *
     * @return VisitResult
     */
    public function setNewsEnabled(bool $newsEnabled): VisitResult
    {
        $this->newsEnabled = $newsEnabled;

        return $this;
    }

    /**
     * @param int $newsPerPortion
     *
     * @return VisitResult
     */
    public function setNewsPerPortion(int $newsPerPortion): VisitResult
    {
        $this->newsPerPortion = $newsPerPortion;

        return $this;
    }

    /**
     * @param bool $monitoringEnabled
     *
     * @return VisitResult
     */
    public function setMonitoringEnabled(bool $monitoringEnabled): VisitResult
    {
        $this->monitoringEnabled = $monitoringEnabled;

        return $this;
    }

    /**
     * @param float $monitoringRconTimeout
     *
     * @return VisitResult
     */
    public function setMonitoringRconTimeout(float $monitoringRconTimeout): VisitResult
    {
        $this->monitoringRconTimeout = $monitoringRconTimeout;

        return $this;
    }

    /**
     * @param string $monitoringRconCommand
     *
     * @return VisitResult
     */
    public function setMonitoringRconCommand(string $monitoringRconCommand): VisitResult
    {
        $this->monitoringRconCommand = $monitoringRconCommand;

        return $this;
    }

    /**
     * @param string $monitoringRconResponsePattern
     *
     * @return VisitResult
     */
    public function setMonitoringRconResponsePattern(string $monitoringRconResponsePattern): VisitResult
    {
        $this->monitoringRconResponsePattern = $monitoringRconResponsePattern;

        return $this;
    }

    /**
     * @param bool $maintenanceModeEnabled
     *
     * @return VisitResult
     */
    public function setMaintenanceModeEnabled(bool $maintenanceModeEnabled): VisitResult
    {
        $this->maintenanceModeEnabled = $maintenanceModeEnabled;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function response(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'accessMode' => $this->accessMode,
            'registerEnabled' => $this->registerEnabled,
            'sendActivationEnabled' => $this->sendActivation,
            'customRedirectAfterRegistrationEnabled' => $this->customRedirectAfterRegistrationEnabled,
            'customRedirectAfterRegistrationUrl' => $this->customRedirectAfterRegistrationUrl,
            'maxSkinFileSize' => $this->maxSkinFileSize,
            'maxCloakFileSize' => $this->maxCloakFileSize,
            'skinSizes' => $this->skinSizes,
            'skinSizesHd' => $this->skinSizesHd,
            'cloakSizes' => $this->cloakSizes,
            'cloakSizesHd' => $this->cloakSizesHd,
            'skinEnabled' => $this->skinEnabled,
            'hdSkinEnabled' => $this->hdSkinEnabled,
            'cloakEnabled' => $this->cloakEnabled,
            'hdCloakEnabled' => $this->hdCloakEnabled,

            'catalogPerPage' => $this->catalogPerPage,
            'sortProductsBy' => $this->sortProductsBy,
            'sortProductsDescending' => $this->sortProductsDescending,
            'newsEnabled' => $this->newsEnabled,
            'newsPerPortion' => $this->newsPerPortion,
            'monitoringEnabled' => $this->monitoringEnabled,
            'monitoringRconTimeout' => $this->monitoringRconTimeout,
            'monitoringRconCommand' => $this->monitoringRconCommand,
            'monitoringRconResponsePattern' => $this->monitoringRconResponsePattern,
            'maintenanceMode' => $this->maintenanceModeEnabled
        ];
    }
}
