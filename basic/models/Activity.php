<?php

namespace app\models;

use yii\base\Model;

/**
 * Class Activity
 * Сущность хранимого в календаре события
 * @package app\models
 */
class Activity extends Model
{
    public ?string $title = null;

    public ?int $startDay = null;

    public ?int $endDay = null;

    public ?string $description = null;

    public ?int $idAuthor = null;

    public bool $repeatable = false;

    public bool $fullDay = false;


    public function createActivity()
    {
        $this->attributes = \Yii::$app->request->post('ActivityForm');
    }

    public function attributeLabels(): array
    {
        return [
            'title' => 'Название события',
            'startDay' => 'Дата начала',
            'endDay' => 'Дата завершения',
            'idAuthor' => 'ID автора',
            'description' => 'Описание события',
        ];
    }

    public function rules(): array
    {
        return [
            [['title', 'startDay', 'endDay'], 'required'],
        ];
    }
}