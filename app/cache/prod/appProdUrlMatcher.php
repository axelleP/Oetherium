<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            // apa_generalPage_homepage
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'oetherium',  'hasErrorConnexion' => false,  '_route' => 'apa_generalPage_homepage',);
            }

            // apa_generalPage_author
            if ($pathinfo === '/auteurs') {
                return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'auteurs',  'hasErrorConnexion' => false,  '_route' => 'apa_generalPage_author',);
            }

        }

        // apa_generalPage_link
        if ($pathinfo === '/liens') {
            return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'liens',  'hasErrorConnexion' => false,  '_route' => 'apa_generalPage_link',);
        }

        // apa_generalPage_faq
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'faq',  'hasErrorConnexion' => false,  '_route' => 'apa_generalPage_faq',);
        }

        // apa_generalPage_legalMention
        if ($pathinfo === '/mentions-legales') {
            return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'Mentions légales',  'hasErrorConnexion' => false,  '_route' => 'apa_generalPage_legalMention',);
        }

        // apa_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_user_homepage')), array (  '_controller' => 'ApaUserBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            // apa_story_characters
            if ($pathinfo === '/personnages') {
                return array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::seeCharactersAction',  '_route' => 'apa_story_characters',);
            }

            // apa_story_characterProfile
            if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil(?:/(?P<firstname>[^/\\-]++)(?:\\-(?P<name>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_story_characterProfile')), array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::seeCharacterProfileAction',  'name' => NULL,  'firstname' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/chapitre')) {
            // apa_story_chapters
            if (0 === strpos($pathinfo, '/chapitres/page') && preg_match('#^/chapitres/page(?:\\-(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_story_chapters')), array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::seeChaptersAction',  'page' => 1,));
            }

            // apa_story_chapter
            if (preg_match('#^/chapitre\\-(?P<numero>[^/]++)/page(?:\\-(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_story_chapter')), array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::readChapterAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/texte')) {
            // apa_story_annexTexts
            if (0 === strpos($pathinfo, '/textes-annexes/page') && preg_match('#^/textes\\-annexes/page(?:\\-(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_story_annexTexts')), array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::seeAnnexTextsAction',  'page' => 1,));
            }

            // apa_story_annexText
            if (0 === strpos($pathinfo, '/texte-annexe') && preg_match('#^/texte\\-annexe\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apa_story_annexText')), array (  '_controller' => 'Apa\\StoryBundle\\Controller\\StoryController::readAnnexTextAction',));
            }

        }

        // apa_admin_getLastChapterNumber
        if ($pathinfo === '/admin/getLastChapterNumber') {
            return array (  '_controller' => 'Apa\\AdminBundle\\Controller\\AdminController::getLastChapterNumberAction',  '_route' => 'apa_admin_getLastChapterNumber',);
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // fos_user_security_login
        if ($pathinfo === '/accueil-co') {
            return array (  '_controller' => 'Apa\\GeneralPageBundle\\Controller\\GeneralPageController::seePageAction',  'pageTitle' => 'oetherium',  'hasErrorConnexion' => 'true',  '_route' => 'fos_user_security_login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/apa')) {
                if (0 === strpos($pathinfo, '/admin/apa/story')) {
                    if (0 === strpos($pathinfo, '/admin/apa/story/chapter')) {
                        // admin_apa_story_chapter_list
                        if ($pathinfo === '/admin/apa/story/chapter/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_list',  '_route' => 'admin_apa_story_chapter_list',);
                        }

                        // admin_apa_story_chapter_create
                        if ($pathinfo === '/admin/apa/story/chapter/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_create',  '_route' => 'admin_apa_story_chapter_create',);
                        }

                        // admin_apa_story_chapter_batch
                        if ($pathinfo === '/admin/apa/story/chapter/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_batch',  '_route' => 'admin_apa_story_chapter_batch',);
                        }

                        // admin_apa_story_chapter_edit
                        if (preg_match('#^/admin/apa/story/chapter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_chapter_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_edit',));
                        }

                        // admin_apa_story_chapter_delete
                        if (preg_match('#^/admin/apa/story/chapter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_chapter_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_delete',));
                        }

                        // admin_apa_story_chapter_show
                        if (preg_match('#^/admin/apa/story/chapter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_chapter_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_show',));
                        }

                        // admin_apa_story_chapter_export
                        if ($pathinfo === '/admin/apa/story/chapter/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.chapter',  '_sonata_name' => 'admin_apa_story_chapter_export',  '_route' => 'admin_apa_story_chapter_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/apa/story/annextext')) {
                        // admin_apa_story_annextext_list
                        if ($pathinfo === '/admin/apa/story/annextext/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_list',  '_route' => 'admin_apa_story_annextext_list',);
                        }

                        // admin_apa_story_annextext_create
                        if ($pathinfo === '/admin/apa/story/annextext/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_create',  '_route' => 'admin_apa_story_annextext_create',);
                        }

                        // admin_apa_story_annextext_batch
                        if ($pathinfo === '/admin/apa/story/annextext/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_batch',  '_route' => 'admin_apa_story_annextext_batch',);
                        }

                        // admin_apa_story_annextext_edit
                        if (preg_match('#^/admin/apa/story/annextext/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_annextext_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_edit',));
                        }

                        // admin_apa_story_annextext_delete
                        if (preg_match('#^/admin/apa/story/annextext/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_annextext_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_delete',));
                        }

                        // admin_apa_story_annextext_show
                        if (preg_match('#^/admin/apa/story/annextext/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_annextext_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_show',));
                        }

                        // admin_apa_story_annextext_export
                        if ($pathinfo === '/admin/apa/story/annextext/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.annextext',  '_sonata_name' => 'admin_apa_story_annextext_export',  '_route' => 'admin_apa_story_annextext_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/apa/story/characterstory')) {
                        // admin_apa_story_characterstory_list
                        if ($pathinfo === '/admin/apa/story/characterstory/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_list',  '_route' => 'admin_apa_story_characterstory_list',);
                        }

                        // admin_apa_story_characterstory_create
                        if ($pathinfo === '/admin/apa/story/characterstory/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_create',  '_route' => 'admin_apa_story_characterstory_create',);
                        }

                        // admin_apa_story_characterstory_batch
                        if ($pathinfo === '/admin/apa/story/characterstory/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_batch',  '_route' => 'admin_apa_story_characterstory_batch',);
                        }

                        // admin_apa_story_characterstory_edit
                        if (preg_match('#^/admin/apa/story/characterstory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_characterstory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_edit',));
                        }

                        // admin_apa_story_characterstory_delete
                        if (preg_match('#^/admin/apa/story/characterstory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_characterstory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_delete',));
                        }

                        // admin_apa_story_characterstory_show
                        if (preg_match('#^/admin/apa/story/characterstory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_characterstory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_show',));
                        }

                        // admin_apa_story_characterstory_export
                        if ($pathinfo === '/admin/apa/story/characterstory/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.characterstory',  '_sonata_name' => 'admin_apa_story_characterstory_export',  '_route' => 'admin_apa_story_characterstory_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/apa/generalpage/page')) {
                    // admin_apa_generalpage_page_list
                    if ($pathinfo === '/admin/apa/generalpage/page/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.generalpage',  '_sonata_name' => 'admin_apa_generalpage_page_list',  '_route' => 'admin_apa_generalpage_page_list',);
                    }

                    // admin_apa_generalpage_page_batch
                    if ($pathinfo === '/admin/apa/generalpage/page/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.generalpage',  '_sonata_name' => 'admin_apa_generalpage_page_batch',  '_route' => 'admin_apa_generalpage_page_batch',);
                    }

                    // admin_apa_generalpage_page_edit
                    if (preg_match('#^/admin/apa/generalpage/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_generalpage_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.generalpage',  '_sonata_name' => 'admin_apa_generalpage_page_edit',));
                    }

                    // admin_apa_generalpage_page_show
                    if (preg_match('#^/admin/apa/generalpage/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_generalpage_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.generalpage',  '_sonata_name' => 'admin_apa_generalpage_page_show',));
                    }

                    // admin_apa_generalpage_page_export
                    if ($pathinfo === '/admin/apa/generalpage/page/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.generalpage',  '_sonata_name' => 'admin_apa_generalpage_page_export',  '_route' => 'admin_apa_generalpage_page_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/apa/story')) {
                    if (0 === strpos($pathinfo, '/admin/apa/story/pagebook')) {
                        // admin_apa_story_pagebook_list
                        if ($pathinfo === '/admin/apa/story/pagebook/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_list',  '_route' => 'admin_apa_story_pagebook_list',);
                        }

                        // admin_apa_story_pagebook_create
                        if ($pathinfo === '/admin/apa/story/pagebook/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_create',  '_route' => 'admin_apa_story_pagebook_create',);
                        }

                        // admin_apa_story_pagebook_batch
                        if ($pathinfo === '/admin/apa/story/pagebook/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_batch',  '_route' => 'admin_apa_story_pagebook_batch',);
                        }

                        // admin_apa_story_pagebook_edit
                        if (preg_match('#^/admin/apa/story/pagebook/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_pagebook_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_edit',));
                        }

                        // admin_apa_story_pagebook_delete
                        if (preg_match('#^/admin/apa/story/pagebook/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_pagebook_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_delete',));
                        }

                        // admin_apa_story_pagebook_show
                        if (preg_match('#^/admin/apa/story/pagebook/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_pagebook_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_show',));
                        }

                        // admin_apa_story_pagebook_export
                        if ($pathinfo === '/admin/apa/story/pagebook/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.pagebook',  '_sonata_name' => 'admin_apa_story_pagebook_export',  '_route' => 'admin_apa_story_pagebook_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/apa/story/image')) {
                        // admin_apa_story_image_list
                        if ($pathinfo === '/admin/apa/story/image/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_list',  '_route' => 'admin_apa_story_image_list',);
                        }

                        // admin_apa_story_image_create
                        if ($pathinfo === '/admin/apa/story/image/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_create',  '_route' => 'admin_apa_story_image_create',);
                        }

                        // admin_apa_story_image_batch
                        if ($pathinfo === '/admin/apa/story/image/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_batch',  '_route' => 'admin_apa_story_image_batch',);
                        }

                        // admin_apa_story_image_edit
                        if (preg_match('#^/admin/apa/story/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_image_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_edit',));
                        }

                        // admin_apa_story_image_delete
                        if (preg_match('#^/admin/apa/story/image/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_image_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_delete',));
                        }

                        // admin_apa_story_image_show
                        if (preg_match('#^/admin/apa/story/image/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apa_story_image_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_show',));
                        }

                        // admin_apa_story_image_export
                        if ($pathinfo === '/admin/apa/story/image/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.image',  '_sonata_name' => 'admin_apa_story_image_export',  '_route' => 'admin_apa_story_image_export',);
                        }

                    }

                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
