<?php

namespace Symfony\Component\Serializer;

use Symfony\Component\Serializer\Encoder\EncoderInterface;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Defines the interface of the Serializer
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface SerializerInterface
{
    /**
     * Serializes data in the appropriate format
     *
     * @param mixed $data any data
     * @param string $format format name
     * @return string
     */
    function serialize($data, $format);

    /**
     * Deserializes data into the given type.
     *
     * @param mixed $data
     * @param string $type
     * @param string $format
     */
    function deserialize($data, $type, $format);

    /**
     * Checks whether the serializer can serialize to given format
     *
     * @param string $format format name
     * @return Boolean
     */
    function supportsSerialization($format);

    /**
     * Checks whether the serializer can deserialize from given format
     *
     * @param string $format format name
     * @return Boolean
     */
    function supportsDeserialization($format);
}
