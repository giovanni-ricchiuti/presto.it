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

namespace Google\Service\Docs;

class SuggestedPositionedObjectProperties extends \Google\Model
{
  /**
   * @var PositionedObjectProperties
   */
  public $positionedObjectProperties;
  protected $positionedObjectPropertiesType = PositionedObjectProperties::class;
  protected $positionedObjectPropertiesDataType = '';
  /**
   * @var PositionedObjectPropertiesSuggestionState
   */
  public $positionedObjectPropertiesSuggestionState;
  protected $positionedObjectPropertiesSuggestionStateType = PositionedObjectPropertiesSuggestionState::class;
  protected $positionedObjectPropertiesSuggestionStateDataType = '';

  /**
   * @param PositionedObjectProperties
   */
  public function setPositionedObjectProperties(PositionedObjectProperties $positionedObjectProperties)
  {
    $this->positionedObjectProperties = $positionedObjectProperties;
  }
  /**
   * @return PositionedObjectProperties
   */
  public function getPositionedObjectProperties()
  {
    return $this->positionedObjectProperties;
  }
  /**
   * @param PositionedObjectPropertiesSuggestionState
   */
  public function setPositionedObjectPropertiesSuggestionState(PositionedObjectPropertiesSuggestionState $positionedObjectPropertiesSuggestionState)
  {
    $this->positionedObjectPropertiesSuggestionState = $positionedObjectPropertiesSuggestionState;
  }
  /**
   * @return PositionedObjectPropertiesSuggestionState
   */
  public function getPositionedObjectPropertiesSuggestionState()
  {
    return $this->positionedObjectPropertiesSuggestionState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuggestedPositionedObjectProperties::class, 'Google_Service_Docs_SuggestedPositionedObjectProperties');
