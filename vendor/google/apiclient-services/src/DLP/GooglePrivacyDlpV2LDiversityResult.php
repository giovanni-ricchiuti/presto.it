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

class GooglePrivacyDlpV2LDiversityResult extends \Google\Collection
{
  protected $collection_key = 'sensitiveValueFrequencyHistogramBuckets';
  /**
   * @var GooglePrivacyDlpV2LDiversityHistogramBucket[]
   */
  public $sensitiveValueFrequencyHistogramBuckets;
  protected $sensitiveValueFrequencyHistogramBucketsType = GooglePrivacyDlpV2LDiversityHistogramBucket::class;
  protected $sensitiveValueFrequencyHistogramBucketsDataType = 'array';

  /**
   * @param GooglePrivacyDlpV2LDiversityHistogramBucket[]
   */
  public function setSensitiveValueFrequencyHistogramBuckets($sensitiveValueFrequencyHistogramBuckets)
  {
    $this->sensitiveValueFrequencyHistogramBuckets = $sensitiveValueFrequencyHistogramBuckets;
  }
  /**
   * @return GooglePrivacyDlpV2LDiversityHistogramBucket[]
   */
  public function getSensitiveValueFrequencyHistogramBuckets()
  {
    return $this->sensitiveValueFrequencyHistogramBuckets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2LDiversityResult::class, 'Google_Service_DLP_GooglePrivacyDlpV2LDiversityResult');
