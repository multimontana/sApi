<?php

namespace Loyalty\Entity;


/**
 * @Entity @Table(name="products")
 */
class Product
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
     * @Column(type="string", nullable=true)
     */
    protected $vendor;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $model;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $vendorCode;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $typePrefix;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $groupId;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $dealerId;

    /**
     * @Column(type="string")
     */
    protected $inStock;

    /**
     * @Column(type="boolean")
     */
    protected $available;

    /**
     * @Column(type="boolean")
     */
    protected $downloadable;

    /**
     * @Column(type="decimal")
     */
    protected $price;

    /**
     * @Column(type="decimal", nullable=true)
     */
    protected $discountPrice;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $category;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $picture;

    /**
     * @Column(type="json", nullable=true)
     */
    protected $annotation;

    /**
     * @Column(type="json", nullable=true)
     */
    protected $termsConditions;

    /**
     * @Column(type="json", nullable=true)
     */
    protected $activationRules;

    /**
     * @Column(type="json", nullable=true)
     */
    protected $termsOfUse;

    /**
     * @Column(type="json", nullable=true)
     */
    protected $params;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor): void
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @param mixed $vendorCode
     */
    public function setVendorCode($vendorCode): void
    {
        $this->vendorCode = $vendorCode;
    }

    /**
     * @return mixed
     */
    public function getTypePrefix()
    {
        return $this->typePrefix;
    }

    /**
     * @param mixed $typePrefix
     */
    public function setTypePrefix($typePrefix): void
    {
        $this->typePrefix = $typePrefix;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param mixed $groupId
     */
    public function setGroupId($groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return mixed
     */
    public function getDealerId()
    {
        return $this->dealerId;
    }

    /**
     * @param mixed $dealerId
     */
    public function setDealerId($dealerId): void
    {
        $this->dealerId = $dealerId;
    }

    /**
     * @return mixed
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param mixed $inStock
     */
    public function setInStock($inStock): void
    {
        $this->inStock = $inStock;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available): void
    {
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getDownloadable()
    {
        return $this->downloadable;
    }

    /**
     * @param mixed $downloadable
     */
    public function setDownloadable($downloadable): void
    {
        $this->downloadable = $downloadable;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param mixed $discountPrice
     */
    public function setDiscountPrice($discountPrice): void
    {
        $this->discountPrice = $discountPrice;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * @param mixed $annotation
     */
    public function setAnnotation($annotation): void
    {
        $this->annotation = $annotation;
    }

    /**
     * @return mixed
     */
    public function getTermsConditions()
    {
        return $this->termsConditions;
    }

    /**
     * @param mixed $termsConditions
     */
    public function setTermsConditions($termsConditions): void
    {
        $this->termsConditions = $termsConditions;
    }

    /**
     * @return mixed
     */
    public function getActivationRules()
    {
        return $this->activationRules;
    }

    /**
     * @param mixed $activationRules
     */
    public function setActivationRules($activationRules): void
    {
        $this->activationRules = $activationRules;
    }

    /**
     * @return mixed
     */
    public function getTermsOfUse()
    {
        return $this->termsOfUse;
    }

    /**
     * @param mixed $termsOfUse
     */
    public function setTermsOfUse($termsOfUse): void
    {
        $this->termsOfUse = $termsOfUse;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

    /**
     * @param $entityManager
     * @param array $xmlResponseObject
     */
    public function saveProducts($entityManager, array $xmlResponseObject)
    {
        for($i = 0; $i < count($xmlResponseObject['Products']['Product']); $i++) {
            $product = new Product();
            $product->setId($xmlResponseObject['Products']['Product'][$i]['Id']);
            $product->setName($xmlResponseObject['Products']['Product'][$i]['Name']);

            if (isset($xmlResponseObject['Products']['Product'][$i]['Vendor'])) {
                $product->setVendor($xmlResponseObject['Products']['Product'][$i]['Vendor']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['Model'])) {
                $product->setModel($xmlResponseObject['Products']['Product'][$i]['Model']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['VendorCode'])) {
                $product->setVendorCode($xmlResponseObject['Products']['Product'][$i]['VendorCode']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['TypePrefix'])) {
                $product->setTypePrefix($xmlResponseObject['Products']['Product'][$i]['TypePrefix']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['GroupId'])) {
                $product->setGroupId($xmlResponseObject['Products']['Product'][$i]['GroupId']);
            }

            $product->setDealerId($xmlResponseObject['Products']['Product'][$i]['DealerID']);

            if (isset($xmlResponseObject['Products']['Product'][$i]['InStock'])) {
                $product->setInStock($xmlResponseObject['Products']['Product'][$i]['InStock']);
            }

            $product->setAvailable($xmlResponseObject['Products']['Product'][$i]['Available']);
            $product->setDownloadable($xmlResponseObject['Products']['Product'][$i]['Downloadable']);
            $product->setPrice($xmlResponseObject['Products']['Product'][$i]['Price']);

            if (isset($xmlResponseObject['Products']['Product'][$i]['DiscountPrice'])) {
                $product->setDiscountPrice($xmlResponseObject['Products']['Product'][$i]['DiscountPrice']);
            }

            $product->setCategory($xmlResponseObject['Products']['Product'][$i]['Category']);
            $product->setPicture($xmlResponseObject['Products']['Product'][$i]['Picture']);

            if (isset($xmlResponseObject['Products']['Product'][$i]['Annotation'])) {
                $product->setAnnotation($xmlResponseObject['Products']['Product'][$i]['Annotation']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['TermsConditions'])) {
                $product->setTermsConditions($xmlResponseObject['Products']['Product'][$i]['TermsConditions']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['ActivationRules'])) {
                $product->setActivationRules($xmlResponseObject['Products']['Product'][$i]['ActivationRules']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['TermsOfUse'])) {
                $product->setTermsOfUse($xmlResponseObject['Products']['Product'][$i]['TermsOfUse']);
            }

            if (isset($xmlResponseObject['Products']['Product'][$i]['Params'])) {
                $product->setParams($xmlResponseObject['Products']['Product'][$i]['Params']);
            }

            $entityManager->persist($product);
        };

        $entityManager->flush();
    }
}
