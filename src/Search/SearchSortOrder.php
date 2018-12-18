<?php

namespace Eoko\Magento2\Client\Search;

class SearchSortOrder
{
    const ASC = 'asc';
    const DESC = 'desc';

    public static $directions = [
        self::ASC => 'Ascending',
        self::DESC => 'Descending',
    ];

    protected $field;
    protected $direction;

    /**
     * SearchSortOrder constructor.
     *
     * @param $field
     * @param $direction
     *
     */
    public function __construct(string $field, string $direction)
    {
        $this->field = $field;
        $this->direction = $direction;

        if (!isset(self::$directions[$direction])) {
            $this->direction = self::ASC;
        }
        $this->direction = $direction;
    }

    public function toArray()
    {
        return [
            'field' => $this->field,
            'direction' => $this->direction,
        ];
    }
}
