<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $array1)
 */
class PageSeo extends Model
{
    protected $table = 'page_seo';

    protected $fillable = ['site_name', 'uri', 'title', 'h1', 'description', 'keyword', 'canonical', 'seo_schema', 'content', 'status'];

    CONST FIELDS = [
        [
            'name' => 'uri',
            'text' => 'Uri',
            'type' => 'input',
            'placeholder' => 'Ex: /news',
            'col' => 12
        ],
        [
            'name' => 'title',
            'text' => 'Tiêu đề',
            'type' => 'input',
            'col' => 6
        ],
        [
            'name' => 'h1',
            'text' => 'H1',
            'type' => 'input',
            'col' => 6
        ],
        [
            'name' => 'description',
            'text' => 'Mô tả',
            'type' => 'textarea',
            'col' => 6
        ],
        [
            'name' => 'keyword',
            'text' => 'Từ khóa',
            'type' => 'textarea',
            'col' => 6
        ],
        [
            'name' => 'canonical',
            'text' => 'Canonical',
            'type' => 'input',
            'col' => 12
        ],
        [
            'name' => 'seo_schema',
            'text' => 'Schema',
            'type' => 'textarea',
            'col' => 12
        ],
        [
            'name' => 'content',
            'text' => 'Nội dung',
            'type' => 'ckeditor'
        ],
        [
            'name' => 'status',
            'text' => 'Trạng thái',
            'type' => 'swipe',
            'col' => 12
        ],
    ];

    CONST CACHE_PAGE_SEO = 'page_seo:';

    public static function set($siteName, $key, $value) {
        self::updateOrCreate(
            [
                'site_name' => $siteName,
                'name' => $key
            ],
            [
                'value' => $value
            ]
        );
    }

    public static function allData($site_name): array
    {
        $pageSeoQuery = PageSeo::query()->where(['site_name' => $site_name, 'status' => 1]);
        return $pageSeoQuery->get()->toArray();
    }
}
