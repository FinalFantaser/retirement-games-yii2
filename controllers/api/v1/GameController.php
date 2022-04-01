<?php

namespace app\controllers\api\v1;

use app\models\Game;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * GameController implements the CRUD actions for Game model.
 */
class GameController extends ActiveController
{
    public $modelClass = 'app\models\Game';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'games',
        'linksEnvelope' => 'pagination_links',
        'metaEnvelope' => 'info',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        $behaviors['contentNegotiator']['formats']['application/json'] = Response::FORMAT_JSON;
        return $behaviors;
    }
}
