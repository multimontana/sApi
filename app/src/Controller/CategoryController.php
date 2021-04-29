<?php

namespace Loyalty\Controller;

class CategoryController
{
    private $entityManager;

    /**
     * CategoryController constructor.
     * @param $entityManager
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param $request
     * @return void
     */
    public function getCategories($request): void
    {
        $data['count'] = 0;
        $data['response'] = [];
        $data['response']['success'] = null;
        $data['response']['error'] = null;

        $sql = 'SELECT ParentType.id as ParentId, ParentType.name as ParentName, ChildType.name as ChildName
                FROM Loyalty\Entity\Category ChildType
                JOIN Loyalty\Entity\Category ParentType WHERE ChildType.parent_id = ParentType.id';

        $query = $this->entityManager->createQuery($sql);
        $categoryParentAndChildes = $query->getResult();

        $data = [];
        for($i = 0; $i < count($categoryParentAndChildes) -1; $i++) {
            if ($categoryParentAndChildes[$i]['ParentId'] === $categoryParentAndChildes[$i + 1]['ParentId']) {
                $data['response']['data'][$categoryParentAndChildes[$i]['ParentName']][] = $categoryParentAndChildes[$i]['ChildName'];
            }
        }

        $data['count'] = count($categoryParentAndChildes);

        $data['response']['success'] = true;
        $data['response']['code'] = 200;

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
