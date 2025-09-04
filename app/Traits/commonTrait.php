<?php

namespace App\Traits;

use App\Constants\commonConstant;
use Illuminate\Support\Facades\Log;
use Exception;

trait commonTrait
{

    public function getDropdownOptions($field_id, $search, $key = '', $searchBy = '')
    {
        try {
            $model = $this->getModelTable($field_id);

            if (!$model) {
                return response()->json([]);
            }

            $query = $model[0]::query()->where('status', '1')->orderBy('name', 'asc');

            if ($field_id == 'ad_topic') {
                $query = $query->where('ad_placement_id', $searchBy);
            }

            $key_field = $key != '' ? $key : 'id';

            if (!empty($search)) {
                $query->where('name', 'like', "%$search%");
            }
            $data = $query->get([$key_field, 'name']);

            return response()->json($data);
        } catch (Exception $e) {
            Log::error('ERROR::GET_DROPDOWN_OPTIONS_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postDropdownOptions($field_id, $name, $extra = '')
    {
        try {
            $model = $this->getModelTable($field_id);
            if (!$model) {
                return response()->json([]);
            }
            $input = ['name' => $name, 'status' => '1'];
            if ($field_id == 'ad_topic') {
                $input['ad_placement_id'] = $extra;
            }
            $data = $model[0]::create($input);
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
