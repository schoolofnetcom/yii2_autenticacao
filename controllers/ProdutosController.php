<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;

class ProdutosController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['index', 'cadastrar', 'editar', 'excluir', 'visualizar'],
//                'rules' => [
//                    [
//                        'actions' => ['index', 'cadastrar'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                    [
//                        'actions' => ['editar', 'excluir'],
//                        'allow' => false,
//                        'roles' => ['?']
//                    ],
//                    [
//                        'actions' => ['visualizar'],
//                        'allow' => true,
//                        'matchCallback' => function($rule, $action) {
//                            // return \Yii::$app->user->identity->perfil === "admin";
//                        }
//                    ]
//                ]
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['produtos/index']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['cadastrar'],
                        'roles' => ['produtos/cadastrar']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['editar'],
                        'roles' => ['produtos/editar']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['excluir'],
                        'roles' => ['produtos/excluir']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['visualizar'],
                        'roles' => ['produtos/visualizar']
                    ]
                ],
                'denyCallback' => function(){
                    throw new NotFoundHttpException("Só pra ver mudar o erro!");
                }

            ]
        ];
    }

    public function actionCadastrar()
    {
        return $this->render('cadastrar');
    }

    public function actionEditar()
    {
        return $this->render('editar');
    }

    public function actionExcluir()
    {
        return $this->render('excluir');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionVisualizar()
    {
        return $this->render('visualizar');
    }

}
