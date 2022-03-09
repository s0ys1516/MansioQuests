<?php namespace Pandaprofit\Projects\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pandaprofit_projects_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'main_image' => 'System\Models\File'
    ];

    public $attachMany = [
        'project_gallery' => 'System\Models\File',
        'project_planning' => 'System\Models\File',
        'project_facades' => 'System\Models\File'
    ];

    public function scopeListFrontEnd($query, $options = []){

        extract(array_merge([
            'page' => 1,
            'perPage' => 20,
            'sort' => 'created_at desc',
						'type' => '',
            // 'floors' => '',
            // 'bedrooms' => ''
        ], $options));

				if($type) {
					$query->where('type', '=', $type);
				}

        return $query->paginate($perPage, $page);
    }
}
