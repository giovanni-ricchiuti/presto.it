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

namespace Google\Service\ServiceManagement;

class CustomError extends \Google\Collection
{
  protected $collection_key = 'types';
  /**
   * @var CustomErrorRule[]
   */
  public $rules;
  protected $rulesType = CustomErrorRule::class;
  protected $rulesDataType = 'array';
  /**
   * @var string[]
   */
  public $types;

  /**
   * @param CustomErrorRule[]
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return CustomErrorRule[]
   */
  public function getRules()
  {
    return $this->rules;
  }
  /**
   * @param string[]
   */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /**
   * @return string[]
   */
  public function getTypes()
  {
    return $this->types;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomError::class, 'Google_Service_ServiceManagement_CustomError');
