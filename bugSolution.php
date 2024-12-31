```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, $this->processData($item)); // Recursive call
        } elseif (is_string($item) && !empty($item)) {
            $result[] = $item;
        }
    }
    return $result;
}

function processDataImproved(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, processDataImproved($item)); // Recursive call
        } elseif (is_string($item) && !empty($item)) {
            $result[] = $item;
        }
    }
    return $result;
}
$nestedArray = [
    'apple',
    ['banana', 'cherry'],
    'date',
    ['fig', ['grape', 'kiwi']]
];

$processedData = processDataImproved($nestedArray);
print_r($processedData);
```