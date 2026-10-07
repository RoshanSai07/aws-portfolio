# Roshan — Collage Portfolio

A fresh PHP portfolio designed as an editorial collage: one dominant visual, smaller supporting panels, rounded surfaces, layered labels and asymmetric project composition.

## Run locally

```bash
composer install
php -S localhost:8000
```

Open `http://localhost:8000`.

## AWS deployment

1. Launch an EC2 instance with PHP, Apache and Composer.
2. Copy this project to the web root.
3. Run `composer install`.
4. Create an RDS MySQL database and import `database/schema.sql`.
5. Create a DynamoDB table named `student_profile` with attributes matching `database/dynamodb-items.json` and add the sample items.
6. Attach an EC2 IAM role with permission to read the DynamoDB table. Do not hard-code AWS access keys.
7. Set environment variables for the Apache/PHP process:

```bash
RDS_HOST=your-rds-endpoint
RDS_DATABASE=portfolio
RDS_USERNAME=admin
RDS_PASSWORD=your-password
AWS_REGION=ap-south-1
DYNAMODB_TABLE=student_profile
DEMO_MODE=false
```

8. Allow MySQL 3306 from the EC2 security group to the RDS security group. Allow HTTP 80 to EC2.

## Assignment mapping

- `academic.php` → Amazon RDS MySQL structured data
- `skills.php` → Amazon DynamoDB through AWS SDK for PHP
- EC2 → hosts the PHP application
- `database/schema.sql` → RDS table setup
- `database/dynamodb-items.json` → sample DynamoDB records

## Important

The default is `DEMO_MODE=true` so the UI can be reviewed before AWS is configured. Set `DEMO_MODE=false` on EC2 for the live RDS/DynamoDB demonstration.
