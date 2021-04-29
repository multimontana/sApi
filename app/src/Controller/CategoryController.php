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
        $query = $this->entityManager->createQueryBuilder()
            ->select('c')
            ->from('Loyalty\Entity\Category', 'c', 'c.name');

        $data['count'] = count($query->getQuery()->getResult());

        if ($query) {
            if ($request->get('offset')) {
                $query = $query->setFirstResult($request->get('offset'));
            }

            if ($request->get('limit')) {
                $query = $query->setMaxResults($request->get('limit'));
            }

            $data['response']['success'] = true;
            $data['response']['code'] = 200;
            $data['response']['data'] = $query->getQuery()->getResult();
        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
