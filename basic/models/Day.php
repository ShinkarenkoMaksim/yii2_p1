<?php

namespace app\models;

use yii\base\Model;

class Day extends Model
{
    public bool $workDay = true;
    public array $activities = [];
}