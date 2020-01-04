<?php
namespace App\Traits\Configurations;
use App\Http\Resources\Backend\Configurations\SettingResource;
use App\Models\Configuration\Settings;
use Illuminate\Http\Request;
trait SettingTraits
{
    public function getData(Request $request)
    {
        $columns = ['id', 'label', 'name', 'is_active', 'is_api_accessible', 'description', 'group'];
        $searchedText = $request->search['value'];
        $start = $request->start;
        $limit = $request->length;
        $order = $columns[$request->order[0]['column']];
        $orderDir = 'desc';
        $recordsTotal = Settings::count();
        $totalFiltered = $recordsTotal;
        if (empty($searchedText) || $searchedText == "*") {
            $notice = Settings::offset($start)
                ->limit($limit)
                ->orderBy($order, $orderDir)
                ->latest()
                ->get();
        } else {
            $notice = Settings::where('label', 'LIKE', "%{$searchedText}%")
                ->orWhere('is_active', 'LIKE', "%{$searchedText}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $orderDir)
                ->latest()
                ->get();
            $totalFiltered = Settings::where('label', 'LIKE', "%{$searchedText}%")
                ->orWhere('is_active', 'LIKE', "%{$searchedText}%")
                ->count();
        }
        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $totalFiltered,
            'data' => SettingResource::collection($notice)
        ]);
    }
}