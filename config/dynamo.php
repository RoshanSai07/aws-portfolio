<?php

require_once __DIR__ . '/config.php';

function dynamoRows(): array
{
    if (DEMO_MODE) {
        return [
            [
                'category' => 'Frontend',
                'items' => [
                    'HTML',
                    'CSS',
                    'React',
                    'Next.js',
                    'Tailwind CSS'
                ]
            ],
            [
                'category' => 'Backend & Data',
                'items' => [
                    'Node.js',
                    'Flask',
                    'Firebase',
                    'REST APIs',
                    'Supabase',
                    'PostgreSQL',
                    'AWS'
                ]
            ],
            [
                'category' => 'Languages',
                'items' => [
                    'JavaScript',
                    'TypeScript',
                    'Python',
                    'Java',
                    'C'
                ]
            ],
            [
                'category' => 'AI / ML',
                'items' => [
                    'scikit-learn',
                    'Pandas',
                    'NumPy'
                ]
            ],
            [
                'category' => 'Tools & Platforms',
                'items' => [
                    'Git',
                    'GitHub',
                    'Vercel',
                    'Netlify',
                    'Figma'
                ]
            ],
            [
                'category' => 'Development Tools',
                'items' => [
                    'VS Code',
                    'IntelliJ IDEA',
                ]
            ]
        ];
    }

    try {
        require_once dirname(__DIR__) . '/vendor/autoload.php';

        $client = new Aws\DynamoDb\DynamoDbClient([
            'version' => 'latest',
            'region' => AWS_REGION
        ]);

        $result = $client->scan([
            'TableName' => DYNAMO_TABLE
        ]);

        $rows = [];

        foreach ($result['Items'] ?? [] as $item) {

            $rows[] = [
                'category' => $item['category']['S'] ?? '',
                'items' => array_map(
                    fn($skill) => $skill['S'] ?? '',
                    $item['items']['L'] ?? []
                )
            ];
        }

        return $rows;

    } catch (Throwable $e) {
        return [];
    }
}