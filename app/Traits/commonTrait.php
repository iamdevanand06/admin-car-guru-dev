<?php

namespace App\Traits;

use App\Constants\commonConstant;
use Illuminate\Support\Facades\Log;
use Exception;

trait commonTrait
{

    public function getDropdownOptions($field_id, $search)
    {
        try {
            $model = $this->getModelTable($field_id);

            if (!$model) {
                return response()->json([]);
            }

            $query = $model[0]::query()->where('status', '1')->orderBy('name', 'asc');

            if (!empty($search)) {
                $query->where('name', 'like', "%$search%");
            }
            $data = $query->orderBy('name', 'asc')->get(['id', 'name']);

            return response()->json($data);
        } catch (Exception $e) {
            Log::error('ERROR::GET_DROPDOWN_OPTIONS_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postDropdownOptions($field_id, $name)
    {
        try {
            $model = $this->getModelTable($field_id);
            if (!$model) {
                return response()->json([]);
            }
            $data = $model[0]::create(['name' => $name, 'status' => '1']);
            return response()->json($data);
        } catch (Exception $e) {
            Log::error('ERROR::POST_DROPDOWN_OPTION_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function getModelTable($field_id, $table = false)
    {
        try {
            foreach (commonConstant::CAR_MAKE_DROPDOWN_MODEL as $key => $dropdown_field) {
                if ($key === $field_id) {
                    $model_name = $dropdown_field['model'];
                    return [$model_name];
                }
            }
            return null;
        } catch (Exception $e) {
            Log::error('ERROR::POST_DROPDOWN_OPTION_SEARCH_MODEL_TABLE_DATA, Message: '
                . $e->getMessage() . ' Line No: ' . $e->getLine());
            return null;
        }
    }

}
