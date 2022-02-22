<?php

declare(strict_types=1);

/**
 * This file is part of the Elastic OpenAPI PHP code generator.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\OpenApi\Codegen\Endpoint;

/**
 * API endpoint interface.
 *
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache2
 */
interface EndpointInterface
{
    /**
     * HTTP method for the current endpoint.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * URI for the current endpoint.
     *
     * @return string
     */
    public function getURI(): string;

    /**
     * Params data for the current endpoint.
     *
     * @return string[]|null
     */
    public function getParams(): ?array;

    /**
     * Body content for the current endpoint.
     *
     * @return array|null
     */
    public function getBody(): ?array;

    /**
     * Set body data for the endpoint.
     *
     * @param array|null $body body data
     *
     * @return $this
     */
    public function setBody($body);

    /**
     * Set params data for the endpoint.
     *
     * @param array|null $params params data
     *
     * @return $this
     */
    public function setParams($params);
}
