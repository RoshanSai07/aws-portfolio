<?php
// Environment-first configuration. Set DEMO_MODE=false on EC2 after AWS is configured.
define('APP_NAME', 'Roshan Kandregula');
define('APP_YEAR', '2026');
define('RDS_HOST', getenv('RDS_HOST') ?: 'localhost');
define('RDS_DB', getenv('RDS_DATABASE') ?: 'portfolio');
define('RDS_USER', getenv('RDS_USERNAME') ?: 'root');
define('RDS_PASS', getenv('RDS_PASSWORD') ?: '');
define('AWS_REGION', getenv('AWS_REGION') ?: 'us-east-1');
define('DYNAMO_TABLE', getenv('DYNAMODB_TABLE') ?: 'student_profile');
define('DEMO_MODE', strtolower(getenv('DEMO_MODE') ?: 'true') === 'true');
?>
