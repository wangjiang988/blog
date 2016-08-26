<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "eps_article".
 *
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property string $keywords
 * @property string $summary
 * @property string $content
 * @property string $source
 * @property string $copySite
 * @property string $copyURL
 * @property string $author
 * @property string $addedBy
 * @property string $editor
 * @property string $addedDate
 * @property string $editedDate
 * @property string $status
 * @property string $type
 * @property string $submittion
 * @property integer $views
 * @property string $sticky
 * @property integer $order
 * @property string $link
 * @property string $css
 * @property string $js
 * @property string $onlyBody
 * @property string $lang
 */
class ArticleModel extends \yii\db\ActiveRecord
{

    const BLOG         =  'blog';
    const ARTICLE      =  'article';
    const SINGLE_PAGE  =  'page';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eps_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'keywords', 'summary', 'content', 'source', 'copySite', 'copyURL', 'author', 'addedBy', 'editor', 'addedDate', 'editedDate', 'type', 'order', 'link', 'css', 'js', 'lang'], 'required'],
            [['summary', 'content', 'source', 'submittion', 'sticky', 'css', 'js', 'onlyBody'], 'string'],
            [['addedDate', 'editedDate'], 'safe'],
            [['views', 'order'], 'integer'],
            [['title', 'keywords'], 'string', 'max' => 150],
            [['alias'], 'string', 'max' => 100],
            [['copySite', 'author', 'addedBy', 'editor'], 'string', 'max' => 60],
            [['copyURL', 'link'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 20],
            [['type', 'lang'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'keywords' => 'Keywords',
            'summary' => 'Summary',
            'content' => 'Content',
            'source' => 'Source',
            'copySite' => 'Copy Site',
            'copyURL' => 'Copy Url',
            'author' => 'Author',
            'addedBy' => 'Added By',
            'editor' => 'Editor',
            'addedDate' => 'Added Date',
            'editedDate' => 'Edited Date',
            'status' => 'Status',
            'type' => 'Type',
            'submittion' => 'Submittion',
            'views' => 'Views',
            'sticky' => 'Sticky',
            'order' => 'Order',
            'link' => 'Link',
            'css' => 'Css',
            'js' => 'Js',
            'onlyBody' => 'Only Body',
            'lang' => 'Lang',
        ];
    }

    /**
     * 分页得到博客文章 按照发布的时间排序
     */

    public function getBlogPostListByPager()
    {


        $query  =  ArticleModel::find()
                        ->where(['type'=> self::BLOG]);


        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);


        $list = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy('addedDate')
            ->all();

        return [
            'pager'=>$pagination,
            'list' =>$list,
        ];
    }
}
