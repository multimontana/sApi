<?php

namespace Loyalty\Entity;


/**
 * @Entity @Table(name="categories")
 */
class Category
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $parent_id;

    /**
     * @Column(type="integer")
     */
    protected $total_products;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId): void
    {
        $this->parent_id = $parentId;
    }

    /**
     * @return int
     */
    public function getTotalProducts(): int
    {
        return $this->total_products;
    }

    /**
     * @param int $total
     */
    public function setTotalProducts(int $total): void
    {
        $this->total_products = $total;
    }

    /**
     * @param $entityManager
     * @param array $xmlResponseObject
     * @return array|null
     */
    public function saveCategories($entityManager, array $xmlResponseObject): ?array
    {
        for($i = 0; $i < count($xmlResponseObject['Categories']['Category']); $i++) {
            $category = new Category();
            $category->setId($xmlResponseObject['Categories']['Category'][$i]['@attributes']['id']);
            $category->setName($xmlResponseObject['Categories']['Category'][$i]['name']);
            $category->setTotalProducts($xmlResponseObject['Categories']['Category'][$i]['totalProducts']);

            if (isset($xmlResponseObject['Categories']['Category'][$i]['@attributes']['parentId'])) {
                $category->setParentId($xmlResponseObject['Categories']['Category'][$i]['@attributes']['parentId']);
            }

            $entityManager->persist($category);
        };

        return $entityManager->flush();
    }
}
