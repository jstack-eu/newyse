<?php

namespace Jstack\Newyse\Model;

/**
 * Image.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Image.html
 */
class Image
{
    /**
     * @var int
     */
    protected $imageId;

    /**
     * @var string
     */
    protected $imageType;

    /**
     * @var string
     */
    protected $imageData;

    /**
     * @var string
     */
    protected $mimeType;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var int
     */
    protected $imageManagerId;

    /**
     * @var string
     */
    protected $defaultImage;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var int
     */
    protected $version;

    /**
     * @return int
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param int $imageId
     *
     * @return Image
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * @param string $imageType
     *
     * @return Image
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * @param string $imageData
     *
     * @return Image
     */
    public function setImageData($imageData)
    {
        $this->imageData = $imageData;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return Image
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     *
     * @return Image
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @return int
     */
    public function getImageManagerId()
    {
        return $this->imageManagerId;
    }

    /**
     * @param int $imageManagerId
     *
     * @return Image
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultImage()
    {
        return $this->defaultImage;
    }

    /**
     * @param string $defaultImage
     *
     * @return Image
     */
    public function setDefaultImage($defaultImage)
    {
        $this->defaultImage = $defaultImage;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     *
     * @return Image
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     *
     * @return Image
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }
}
