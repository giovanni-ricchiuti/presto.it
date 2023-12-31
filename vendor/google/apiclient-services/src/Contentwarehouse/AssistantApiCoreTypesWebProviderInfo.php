<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class AssistantApiCoreTypesWebProviderInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $homeStorage;
  /**
   * @var string
   */
  public $localizedAppName;
  /**
   * @var string
   */
  public $openAppUrl;
  /**
   * @var AssistantApiCoreTypesWebProviderInfoThirdPartyCustomNluInfo
   */
  public $thirdPartyCustomNluInfo;
  protected $thirdPartyCustomNluInfoType = AssistantApiCoreTypesWebProviderInfoThirdPartyCustomNluInfo::class;
  protected $thirdPartyCustomNluInfoDataType = '';

  /**
   * @param string
   */
  public function setHomeStorage($homeStorage)
  {
    $this->homeStorage = $homeStorage;
  }
  /**
   * @return string
   */
  public function getHomeStorage()
  {
    return $this->homeStorage;
  }
  /**
   * @param string
   */
  public function setLocalizedAppName($localizedAppName)
  {
    $this->localizedAppName = $localizedAppName;
  }
  /**
   * @return string
   */
  public function getLocalizedAppName()
  {
    return $this->localizedAppName;
  }
  /**
   * @param string
   */
  public function setOpenAppUrl($openAppUrl)
  {
    $this->openAppUrl = $openAppUrl;
  }
  /**
   * @return string
   */
  public function getOpenAppUrl()
  {
    return $this->openAppUrl;
  }
  /**
   * @param AssistantApiCoreTypesWebProviderInfoThirdPartyCustomNluInfo
   */
  public function setThirdPartyCustomNluInfo(AssistantApiCoreTypesWebProviderInfoThirdPartyCustomNluInfo $thirdPartyCustomNluInfo)
  {
    $this->thirdPartyCustomNluInfo = $thirdPartyCustomNluInfo;
  }
  /**
   * @return AssistantApiCoreTypesWebProviderInfoThirdPartyCustomNluInfo
   */
  public function getThirdPartyCustomNluInfo()
  {
    return $this->thirdPartyCustomNluInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiCoreTypesWebProviderInfo::class, 'Google_Service_Contentwarehouse_AssistantApiCoreTypesWebProviderInfo');
