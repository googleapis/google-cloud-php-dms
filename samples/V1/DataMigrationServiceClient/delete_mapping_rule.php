<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START datamigration_v1_generated_DataMigrationService_DeleteMappingRule_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\CloudDms\V1\Client\DataMigrationServiceClient;
use Google\Cloud\CloudDms\V1\DeleteMappingRuleRequest;

/**
 * Deletes a single mapping rule.
 *
 * @param string $formattedName Name of the mapping rule resource to delete. Please see
 *                              {@see DataMigrationServiceClient::conversionWorkspaceName()} for help formatting this field.
 */
function delete_mapping_rule_sample(string $formattedName): void
{
    // Create a client.
    $dataMigrationServiceClient = new DataMigrationServiceClient();

    // Prepare the request message.
    $request = (new DeleteMappingRuleRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $dataMigrationServiceClient->deleteMappingRule($request);
        printf('Call completed successfully.' . PHP_EOL);
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = DataMigrationServiceClient::conversionWorkspaceName(
        '[PROJECT]',
        '[LOCATION]',
        '[CONVERSION_WORKSPACE]'
    );

    delete_mapping_rule_sample($formattedName);
}
// [END datamigration_v1_generated_DataMigrationService_DeleteMappingRule_sync]
