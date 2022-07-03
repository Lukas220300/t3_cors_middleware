<?php

namespace SCHOENBECK\CorsMiddleware\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Log\LoggerAwareTrait;
use Tuupola\Middleware\CorsMiddleware;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ProxyCorsMiddleware implements MiddlewareInterface
{

    use LoggerAwareTrait;

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Get extension configuration
        $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('t3_cors_middleware');
        if(empty($extensionConfiguration)) {
            $this->logger->warning('No extension configuration for extension t3_cors_middleware found!');
            return $handler->handle($request);
        }

        // create options
        $options = [
            'origin' => [$extensionConfiguration['origin']],
        ];
        if($extensionConfiguration['enableAuthorizationHeader']) {
            $options['headers.allow'] = ['Authorization'];
        }
        // create cors middleware
        $middleware = new CorsMiddleware($options);

        return $middleware->process($request, $handler);
    }
}