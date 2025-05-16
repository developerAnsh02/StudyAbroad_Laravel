<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UniversityController extends Controller
{
    public function index()
    {
        $dataPath = 'data.json';
    
        if (Storage::exists($dataPath)) {
            $json = Storage::get($dataPath);
            $includedData = json_decode($json, true);
    
            if (json_last_error() === JSON_ERROR_NONE && is_array($includedData)) {
                $universities = $this->normalizeData($includedData);
                $universities = collect($universities)->paginate(6); // 6 cards per page
            } else {
                $universities = [];
            }
        } else {
            $universities = [];
        }
    
        return view('result-universities', compact('universities'));
    }

    private function normalizeData(array $data): array
    {
        return array_map(function ($uni) {
            return [
                '_id' => $uni['_id'] ?? null,
                'id' => $uni['id'] ?? null,
                'name' => trim($uni['name'] ?? ''),
                'title' => trim($uni['title'] ?? ''),
                'description' => $uni['description'] ?? '',
                'coursesWebsite' => [
                    'image' => $uni['coursesWebsite']['image'] ?: '',
                    'duration' => Str::title(trim($uni['coursesWebsite']['duration'] ?? '')),
                    'courseLevel' => trim($uni['coursesWebsite']['courseLevel'] ?? 'N/A'),
                    'courseLevelId' => $uni['coursesWebsite']['courseLevelId'] ?? 'N/A',
                    'tuitionFees' => (float) ($uni['coursesWebsite']['tuitionFees'] ?? 0),
                    'address' => trim($uni['coursesWebsite']['address'] ?? ''),
                    'location' => trim($uni['coursesWebsite']['location'] ?? 'Unknown'),
                    'applicationFees' => $uni['coursesWebsite']['applicationFees'] ?? 'N/A',
                ],
                'linksDetails' => $uni['linksDetails'] ?? ['universityId' => null],
                'university' => [
                    'name' => trim($uni['university']['name'] ?? 'Unnamed University'),
                    'currencySymbol' => $uni['university']['currencySymbol'] ?? '$',
                    'currencyCode' => $uni['university']['currencyCode'] ?? 'USD',
                    'bannerImage' => $uni['university']['bannerImage'] ?? '',
                    'image' => $uni['university']['image'] ?? '',
                ],
            ];
        }, $data);
    }
}