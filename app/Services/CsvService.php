<?php

namespace App\Services;

use League\Csv\Writer;

class CsvService
{
    public function downloadCsv(array $data, string $fileName)
    {
        // Create a CSV writer instance
        $csv = Writer::createFromString('');

        // Insert data into the CSV
        $csv->insertAll($data);

        // Set the content type and headers
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        // Return the CSV as a downloadable file
        return response($csv->getContent(), 200, $headers);
    }
}
