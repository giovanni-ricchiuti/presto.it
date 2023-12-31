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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2IntentMessageMediaContent extends \Google\Collection
{
  protected $collection_key = 'mediaObjects';
  /**
   * @var GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[]
   */
  public $mediaObjects;
  protected $mediaObjectsType = GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject::class;
  protected $mediaObjectsDataType = 'array';
  /**
   * @var string
   */
  public $mediaType;

  /**
   * @param GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[]
   */
  public function setMediaObjects($mediaObjects)
  {
    $this->mediaObjects = $mediaObjects;
  }
  /**
   * @return GoogleCloudDialogflowV2IntentMessageMediaContentResponseMediaObject[]
   */
  public function getMediaObjects()
  {
    return $this->mediaObjects;
  }
  /**
   * @param string
   */
  public function setMediaType($mediaType)
  {
    $this->mediaType = $mediaType;
  }
  /**
   * @return string
   */
  public function getMediaType()
  {
    return $this->mediaType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2IntentMessageMediaContent::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2IntentMessageMediaContent');
