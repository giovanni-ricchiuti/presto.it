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

class SocialGraphApiProtoPartialNameOptionsTwoPartNameSpec extends \Google\Model
{
  /**
   * @var SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public $familyNameSpec;
  protected $familyNameSpecType = SocialGraphApiProtoPartialNameOptionsNamePartSpec::class;
  protected $familyNameSpecDataType = '';
  /**
   * @var SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public $givenNameSpec;
  protected $givenNameSpecType = SocialGraphApiProtoPartialNameOptionsNamePartSpec::class;
  protected $givenNameSpecDataType = '';

  /**
   * @param SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public function setFamilyNameSpec(SocialGraphApiProtoPartialNameOptionsNamePartSpec $familyNameSpec)
  {
    $this->familyNameSpec = $familyNameSpec;
  }
  /**
   * @return SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public function getFamilyNameSpec()
  {
    return $this->familyNameSpec;
  }
  /**
   * @param SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public function setGivenNameSpec(SocialGraphApiProtoPartialNameOptionsNamePartSpec $givenNameSpec)
  {
    $this->givenNameSpec = $givenNameSpec;
  }
  /**
   * @return SocialGraphApiProtoPartialNameOptionsNamePartSpec
   */
  public function getGivenNameSpec()
  {
    return $this->givenNameSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SocialGraphApiProtoPartialNameOptionsTwoPartNameSpec::class, 'Google_Service_Contentwarehouse_SocialGraphApiProtoPartialNameOptionsTwoPartNameSpec');
