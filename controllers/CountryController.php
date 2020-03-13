<?php

namespace app\controllers;
use app\models\EntryForm;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex($filter = '1', $colum = '')
    {
        $query = Country::find() -> where('population > '.$filter);

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy($colum)
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);

    }



 //2lr

    public function actionAddCountry()
    {

        $model = new Country();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {



            return $this->render('entry-confirm', ['model' => $model]);

        } else {



            return $this->render('entry', ['model' => $model]);

        }

    }

}
