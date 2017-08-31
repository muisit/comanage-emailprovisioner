<?php
/**
 * COmanage Registry Name Fixture
 *
 * Portions licensed to the University Corporation for Advanced Internet
 * Development, Inc. ("UCAID") under one or more contributor license agreements.
 * See the NOTICE file distributed with this work for additional information
 * regarding copyright ownership.
 *
 * UCAID licenses this file to you under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License. You may obtain a copy of the License at:
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry
 * @since         COmanage Registry vTODO
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */

class NameFixture extends CakeTestFixture {
    // Import schema for the model from the default database.
    // The fixture data itself will be written to test and
    // not default.
    public $import = array('model' => 'Name', 'connection' => 'default');

    public function init() {

      $records = array(
        array(
            "id" => 1,
            "honorific" => "no",
            "given" => "such",
            "middle" => "",
            "family" => "name",
            "suffix" => "ever",
            "type" => "official",
            "language" => null,
            "co_person_id" =>1,
            "org_identity_id" => null,
            "primary_name" => 1,
            "source_name_id" => null,
            "created" => "1999-12-11 11:23:45",
            "modified" => "1999-12-11 11:23:45",
            "name_id" => null,
            "revision" => "0",
            "deleted" => "0",
            "actor_identifier" => null
        ),
        array(
            "id" => 2,
            "honorific" => "Dr",
            "given" => "Jake",
            "middle" => "the",
            "family" => "Phill",
            "suffix" => "MD",
            "type" => "official",
            "language" => null,
            "co_person_id" =>5,
            "org_identity_id" => null,
            "primary_name" => 1,
            "source_name_id" => null,
            "created" => "1999-12-11 11:23:45",
            "modified" => "1999-12-11 11:23:45",
            "name_id" => null,
            "revision" => "0",
            "deleted" => "0",
            "actor_identifier" => null
        ),
        array(
            "id" => 3,
            "honorific" => "",
            "given" => "Pete",
            "middle" => "",
            "family" => "mcBride",
            "suffix" => "",
            "type" => "",
            "language" => null,
            "co_person_id" =>1,
            "org_identity_id" => null,
            "primary_name" => 0,
            "source_name_id" => null,
            "created" => "1999-12-11 11:23:45",
            "modified" => "1999-12-11 11:23:45",
            "name_id" => null,
            "revision" => "0",
            "deleted" => "0",
            "actor_identifier" => null
        ),
        array(
            "id" => 4,
            "honorific" => "",
            "given" => "",
            "middle" => "",
            "family" => "Anonymous",
            "suffix" => "",
            "type" => "",
            "language" => null,
            "co_person_id" =>5,
            "org_identity_id" => null,
            "primary_name" => 0,
            "source_name_id" => null,
            "created" => "1999-12-11 11:23:45",
            "modified" => "1999-12-11 11:23:45",
            "name_id" => null,
            "revision" => "0",
            "deleted" => "0",
            "actor_identifier" => null
        ),
      );

      $this->records = $records;

      parent::init();
    }
}
