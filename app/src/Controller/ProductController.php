<?php

namespace Loyalty\Controller;

class ProductController
{
    private $entityManager;

    /**
     * ProductController constructor.
     * @param $entityManager
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param $request
     * @return string
     */
    public function getProductById($request): string
    {
        $data['count'] = 0;
        $data['response'] = [];
        $data['response']['success'] = null;
        $data['response']['error'] = null;

        $query = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from('Loyalty\Entity\Product', 'p');

        if ($request->get('cn')) {
            $query = $query->where('p.category = :category')
                ->setParameter('category', $request->get('cn'));
        }

        $data['count'] = $query->getQuery()->getArrayResult();

        if ($query) {
            if ($request->get('offset')) {
                $query = $query->setFirstResult($request->get('offset'));
            }

            if ($request->get('limit')) {
                $query = $query->setMaxResults($request->get('limit'));
            }

            $data['response']['success'] = true;
            $data['response']['code'] = 200;
            $data['response']['data'] = $query->getQuery()->getArrayResult();
        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $request
     * @return string
     */
    public function getProductByCategoryName($request): string
    {
        $data['count'] = 0;
        $data['response']['success'] = null;
        $data['response']['error'] = null;

        $query = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from('Loyalty\Entity\Product', 'p')
            ->where('p.id = :id')
            ->setParameter('id', $request->get('id'));

        if ($query) {
            $data['response']['success'] = true;
            $data['response']['code'] = 200;
            $data['response']['data'] = $query->getQuery()->getArrayResult();
        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
