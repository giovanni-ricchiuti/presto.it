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

namespace Google\Service\DataCatalog;

class GoogleCloudDatacatalogV1DatabaseTableSpec extends \Google\Model
{
  /**
   * @var GoogleCloudDatacatalogV1DatabaseTableSpecDatabaseViewSpec
   */
  public $databaseViewSpec;
  protected $databaseViewSpecType = GoogleCloudDatacatalogV1DatabaseTableSpecDatabaseViewSpec::class;
  protected $databaseViewSpecDataType = '';
  /**
   * @var GoogleCloudDatacatalogV1DataplexTableSpec
   */
  public $dataplexTable;
  protected $dataplexTableType = GoogleCloudDatacatalogV1DataplexTableSpec::class;
  protected $dataplexTableDataType = '';
  /**
   * @var string
   */
  public $type;

  /**
   * @param GoogleCloudDatacatalogV1DatabaseTableSpecDatabaseViewSpec
   */
  public function setDatabaseViewSpec(GoogleCloudDatacatalogV1DatabaseTableSpecDatabaseViewSpec $databaseViewSpec)
  {
    $this->databaseViewSpec = $databaseViewSpec;
  }
  /**
   * @return GoogleCloudDatacatalogV1DatabaseTableSpecDatabaseViewSpec
   */
  public function getDatabaseViewSpec()
  {
    return $this->databaseViewSpec;
  }
  /**
   * @param GoogleCloudDatacatalogV1DataplexTableSpec
   */
  public function setDataplexTable(GoogleCloudDatacatalogV1DataplexTableSpec $dataplexTable)
  {
    $this->dataplexTable = $dataplexTable;
  }
  /**
   * @return GoogleCloudDatacatalogV1DataplexTableSpec
   */
  public function getDataplexTable()
  {
    return $this->dataplexTable;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogV1DatabaseTableSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DatabaseTableSpec');
