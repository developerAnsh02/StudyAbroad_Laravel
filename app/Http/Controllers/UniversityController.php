<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UniversityController extends Controller
{
    public function index()
    {
        // Default to USA data
        return redirect()->route('universities.byCountry', ['country' => 'usa']);
    }

    public function showByCountry(Request $request, $country)
    {
        $availableCountries = ['usa', 'canada', 'australia', 'ireland', 'malaysia', 'newzlealand', 'singapore', 'UAE', 'uk'];

        if (!in_array($country, $availableCountries)) {
            abort(404, 'Country not supported');
        }

        $dataPath = storage_path("app/data/{$country}.json");
        $universities = [];
        
        if (file_exists($dataPath)) {
            $json = file_get_contents($dataPath);
            $cleanedJson = preg_replace('/[[:cntrl:]]/', '', $json);
            $parsed = json_decode($cleanedJson, true);

            if (json_last_error() === JSON_ERROR_NONE && isset($parsed['data']['data'])) {
                $universities = $this->normalizeData($parsed['data']['data']);
                $currentPage = LengthAwarePaginator::resolveCurrentPage();
                $perPage = 6;
                $currentItems = array_slice($universities, ($currentPage - 1) * $perPage, $perPage);
                $paginated = new LengthAwarePaginator($currentItems, count($universities), $perPage, $currentPage);
                $paginated->setPath($request->url());
            } else {
                $paginated = new LengthAwarePaginator([], 0, 6);
            }
        } else {
            $paginated = new LengthAwarePaginator([], 0, 6);
        }

        return view('result-universities', [
            'universities' => $paginated,
            'selectedCountry' => $country,
            'availableCountries' => $availableCountries,
        ]);
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
                    'image' => $uni['coursesWebsite']['image'] ?? '',
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