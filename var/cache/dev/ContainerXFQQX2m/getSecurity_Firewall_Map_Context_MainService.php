<?php

namespace ContainerXFQQX2m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->getSecurity_ContextListener_0Service());
            yield 2 => ($container->privates['security.firewall.authenticator.main'] ?? $container->load('getSecurity_Firewall_Authenticator_MainService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'main', ($container->privates['security.authenticator.form_login.main'] ?? $container->load('getSecurity_Authenticator_FormLogin_MainService')), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ($container->privates['security.event_dispatcher.main'] ?? $container->getSecurity_EventDispatcher_MainService()), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'security.authenticator.form_login.main', NULL, NULL, [0 => 'form_login'], NULL), ($container->privates['security.untracked_token_storage'] ?? ($container->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }
}
