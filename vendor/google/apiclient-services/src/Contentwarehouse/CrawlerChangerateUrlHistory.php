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

class CrawlerChangerateUrlHistory extends \Google\Collection
{
  protected $collection_key = 'change';
  /**
   * @var CrawlerChangerateUrlChange[]
   */
  public $change;
  protected $changeType = CrawlerChangerateUrlChange::class;
  protected $changeDataType = 'array';
  /**
   * @var CrawlerChangerateUrlVersion
   */
  public $latestVersion;
  protected $latestVersionType = CrawlerChangerateUrlVersion::class;
  protected $latestVersionDataType = '';
  /**
   * @var string
   */
  public $url;

  /**
   * @param CrawlerChangerateUrlChange[]
   */
  public function setChange($change)
  {
    $this->change = $change;
  }
  /**
   * @return CrawlerChangerateUrlChange[]
   */
  public function getChange()
  {
    return $this->change;
  }
  /**
   * @param CrawlerChangerateUrlVersion
   */
  public function setLatestVersion(CrawlerChangerateUrlVersion $latestVersion)
  {
    $this->latestVersion = $latestVersion;
  }
  /**
   * @return CrawlerChangerateUrlVersion
   */
  public function getLatestVersion()
  {
    return $this->latestVersion;
  }
  /**
   * @param string
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CrawlerChangerateUrlHistory::class, 'Google_Service_Contentwarehouse_CrawlerChangerateUrlHistory');
