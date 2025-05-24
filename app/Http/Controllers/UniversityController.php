<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UniversityController extends Controller
{

public function showByCountry(Request $request)
{
    $availableCountries = ['usa', 'canada', 'australia', 'ireland', 'malaysia', 'newzlealand', 'singapore', 'UAE', 'uk'];

    $country = $request->query('country', 'usa');

    if (!in_array( $country, $availableCountries)) {
        abort(404, 'Country not supported');
    }

    $courseLevel = $request->query('courseLevel', null);
    $tuitionRange = $request->query('tuitionRange', null);
    $department = $request->query('department', null);


    $dataPath = storage_path("app/data/{$country}.json");
    $universities = [];
    $courseLevels = [];
    $tuitionRanges = [];
    $departments = [];

    if (file_exists($dataPath)) {
        $json = file_get_contents($dataPath);
        $cleanedJson = preg_replace('/[[:cntrl:]]/', '', $json);
        $parsed = json_decode($cleanedJson, true);

        if (json_last_error() === JSON_ERROR_NONE && isset($parsed['data']['data'])) {
            $universities = $this->normalizeData($parsed['data']['data']);

            // Extract unique course levels
            $courseLevels = collect($universities)
                ->pluck('coursesWebsite.courseLevel')
                ->unique()
                ->filter()
                ->values()
                ->all();

            // Filter by course level
            if ($courseLevel && $courseLevel !== 'all') {
                $universities = array_filter($universities, function ($uni) use ($courseLevel) {
                    return strtolower($uni['coursesWebsite']['courseLevel']) === strtolower($courseLevel);
                });
            }

            // Extract tuition fee ranges dynamically from current university set
            $fees = collect($universities)->pluck('coursesWebsite.tuitionFees')->filter()->values();
            if ($fees->count() > 0) {
                $minFee = floor($fees->min() / 20000) * 20000;
                $maxFee = ceil($fees->max() / 20000) * 20000;

                for ($start = $minFee; $start < $maxFee; $start += 20000) {
                    $end = $start + 20000;
                    $tuitionRanges[] = "{$start}-{$end}";
                }
            }

            // Filter by tuition range
            if ($tuitionRange && $tuitionRange !== 'all' && strpos($tuitionRange, '-') !== false) {
                [$min, $max] = explode('-', $tuitionRange);
                $universities = array_filter($universities, function ($uni) use ($min, $max) {
                    $fee = $uni['coursesWebsite']['tuitionFees'] ?? 0;
                    return $fee >= (int)$min && $fee <= (int)$max;
                });
            }

            // Extract unique departments from current filtered universities
            $departments = collect($universities)
                ->pluck('coursesWebsite.department')
                ->merge(collect($universities)->pluck('name'))
                ->merge(collect($universities)->pluck('title'))
                ->unique()
                ->filter()
                ->values()
                ->all();

            // 🔽 Filter by department
            $department = $request->query('department');
            if ($department && $department !== 'all') {
                $universities = array_filter($universities, function ($uni) use ($department) {
                    $name = strtolower($uni['name'] ?? '');
                    $title = strtolower($uni['title'] ?? '');

                    return $name === strtolower($department)
                        || $title === strtolower($department);
                });
            }


            // Paginate
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 6;
            $currentItems = array_slice($universities, ($currentPage - 1) * $perPage, $perPage);
            $paginated = new LengthAwarePaginator($currentItems, count($universities), $perPage, $currentPage);
            $paginated->setPath($request->url());
            $paginated->appends($request->except('page'));
        } else {
            $paginated = new LengthAwarePaginator([], 0, 6);
        }
    } else {
        $paginated = new LengthAwarePaginator([], 0, 6);
    }

    $currencySymbols = [
        'canada' => '$',
        'australia' => '$',
        'ireland' => '€',
        'malaysia' => 'RM',
        'newzlealand' => '$',
        'singapore' => '$',
        'uae' => 'AED',
        'uk' => '£',
        'usa' => '$',
    ];

    // Get selected country from request, default to 'usa'
    $selectedCountry = strtolower($request->input('country', 'usa'));

    // Lookup currency symbol, default to '$' if not found
    $currencySymbol = $currencySymbols[$selectedCountry] ?? '$';


    if ($request->ajax() && $request->query('filterUpdateOnly')) {
        return response()->json([
            'courseLevels' => $courseLevels,
            'tuitionRanges' => $tuitionRanges,
            'departments' => $departments,
            'currencySymbol' => $currencySymbol,
        ]);
    }
    

    return view('result-universities', [
        'universities' => $paginated,
        'selectedCountry' => $country,
        'selectedCourseLevel' => $courseLevel ?? 'all',
        'selectedTuitionRange' => $tuitionRange ?? 'all',
        'availableCountries' => $availableCountries,
        'availableCourseLevels' => $courseLevels,
        'availableTuitionRanges' => $tuitionRanges,
        'availableDepartments' => $departments,
        'currencySymbol' => $currencySymbol,
    ]);
}


// For home page 

public function filterUniversity(Request $request)
{
    $availableCountries = ['usa', 'canada', 'australia', 'ireland', 'malaysia', 'newzlealand', 'singapore', 'UAE', 'uk'];

    $country = $request->query('country', 'usa');

    if (!in_array( $country, $availableCountries)) {
        abort(404, 'Country not supported');
    }

    $courseLevel = $request->query('courseLevel', null);
    $tuitionRange = $request->query('tuitionRange', null);
    $department = $request->query('department', null);


    $dataPath = storage_path("app/data/{$country}.json");
    $universities = [];
    $courseLevels = [];
    $tuitionRanges = [];
    $departments = [];

    if (file_exists($dataPath)) {
        $json = file_get_contents($dataPath);
        $cleanedJson = preg_replace('/[[:cntrl:]]/', '', $json);
        $parsed = json_decode($cleanedJson, true);

        if (json_last_error() === JSON_ERROR_NONE && isset($parsed['data']['data'])) {
            $universities = $this->normalizeData($parsed['data']['data']);

            // Extract unique course levels
            $courseLevels = collect($universities)
                ->pluck('coursesWebsite.courseLevel')
                ->unique()
                ->filter()
                ->values()
                ->all();

            // Filter by course level
            if ($courseLevel && $courseLevel !== 'all') {
                $universities = array_filter($universities, function ($uni) use ($courseLevel) {
                    return strtolower($uni['coursesWebsite']['courseLevel']) === strtolower($courseLevel);
                });
            }

            // Extract tuition fee ranges dynamically from current university set
            $fees = collect($universities)->pluck('coursesWebsite.tuitionFees')->filter()->values();
            if ($fees->count() > 0) {
                $minFee = floor($fees->min() / 20000) * 20000;
                $maxFee = ceil($fees->max() / 20000) * 20000;

                for ($start = $minFee; $start < $maxFee; $start += 20000) {
                    $end = $start + 20000;
                    $tuitionRanges[] = "{$start}-{$end}";
                }
            }

            // Filter by tuition range
            if ($tuitionRange && $tuitionRange !== 'all' && strpos($tuitionRange, '-') !== false) {
                [$min, $max] = explode('-', $tuitionRange);
                $universities = array_filter($universities, function ($uni) use ($min, $max) {
                    $fee = $uni['coursesWebsite']['tuitionFees'] ?? 0;
                    return $fee >= (int)$min && $fee <= (int)$max;
                });
            }

            // Extract unique departments from current filtered universities
            $departments = collect($universities)
                ->pluck('coursesWebsite.department')
                ->merge(collect($universities)->pluck('name'))
                ->merge(collect($universities)->pluck('title'))
                ->unique()
                ->filter()
                ->values()
                ->all();

            // 🔽 Filter by department
            $department = $request->query('department');
            if ($department && $department !== 'all') {
                $universities = array_filter($universities, function ($uni) use ($department) {
                    $name = strtolower($uni['name'] ?? '');
                    $title = strtolower($uni['title'] ?? '');

                    return $name === strtolower($department)
                        || $title === strtolower($department);
                });
            }


            // Paginate
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $perPage = 6;
            $currentItems = array_slice($universities, ($currentPage - 1) * $perPage, $perPage);
            $paginated = new LengthAwarePaginator($currentItems, count($universities), $perPage, $currentPage);
            $paginated->setPath($request->url());
            $paginated->appends($request->except('page'));
        } else {
            $paginated = new LengthAwarePaginator([], 0, 6);
        }
    } else {
        $paginated = new LengthAwarePaginator([], 0, 6);
    }

    $currencySymbols = [
        'canada' => '$',
        'australia' => '$',
        'ireland' => '€',
        'malaysia' => 'RM',
        'newzlealand' => '$',
        'singapore' => '$',
        'uae' => 'AED',
        'uk' => '£',
        'usa' => '$',
    ];

    // Get selected country from request, default to 'usa'
    $selectedCountry = strtolower($request->input('country', 'usa'));

    // Lookup currency symbol, default to '$' if not found
    $currencySymbol = $currencySymbols[$selectedCountry] ?? '$';


    if ($request->ajax() && $request->query('filterUpdateOnly')) {
        return response()->json([
            'courseLevels' => $courseLevels,
            'tuitionRanges' => $tuitionRanges,
            'departments' => $departments,
            'currencySymbol' => $currencySymbol,
        ]);
    }
    

    return view('home', [
        'universities' => $paginated,
        'selectedCountry' => $country,
        'selectedCourseLevel' => $courseLevel ?? 'all',
        'selectedTuitionRange' => $tuitionRange ?? 'all',
        'availableCountries' => $availableCountries,
        'availableCourseLevels' => $courseLevels,
        'availableTuitionRanges' => $tuitionRanges,
        'availableDepartments' => $departments,
        'currencySymbol' => $currencySymbol,
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