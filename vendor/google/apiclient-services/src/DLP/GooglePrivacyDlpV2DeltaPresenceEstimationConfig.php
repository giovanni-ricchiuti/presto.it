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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2DeltaPresenceEstimationConfig extends \Google\Collection
{
  protected $collection_key = 'quasiIds';
  /**
   * @var GooglePrivacyDlpV2StatisticalTable[]
   */
  public $auxiliaryTables;
  protected $auxiliaryTablesType = GooglePrivacyDlpV2StatisticalTable::class;
  protected $auxiliaryTablesDataType = 'array';
  /**
   * @var GooglePrivacyDlpV2QuasiId[]
   */
  public $quasiIds;
  protected $quasiIdsType = GooglePrivacyDlpV2QuasiId::class;
  protected $quasiIdsDataType = 'array';
  /**
   * @var string
   */
  public $regionCode;

  /**
   * @param GooglePrivacyDlpV2StatisticalTable[]
   */
  public function setAuxiliaryTables($auxiliaryTables)
  {
    $this->auxiliaryTables = $auxiliaryTables;
  }
  /**
   * @return GooglePrivacyDlpV2StatisticalTable[]
   */
  public function getAuxiliaryTables()
  {
    return $this->auxiliaryTables;
  }
  /**
   * @param GooglePrivacyDlpV2QuasiId[]
   */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /**
   * @return GooglePrivacyDlpV2QuasiId[]
   */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /**
   * @param string
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2DeltaPresenceEstimationConfig::class, 'Google_Service_DLP_GooglePrivacyDlpV2DeltaPresenceEstimationConfig');
