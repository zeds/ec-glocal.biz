<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

// Modified by takahashi from cs-cart.jp 2020
// is_htmlがfalseの場合、&amp; を強制的に&に修正

namespace Tygh\Mailer\MessageBuilders;


use Tygh\Mailer\AMessageBuilder;
use Tygh\Mailer\Message;
use Tygh\SmartyEngine\Core;
use Tygh\Storefront\Repository;

/**
 * The class responsible for building a message based on the Smarty template files.
 *
 * @package Tygh\Mailer\MessageBuilders
 */
class FileTemplateMessageBuilder extends AMessageBuilder
{
    /** @var Core Smarty templater*/
    protected $view;

    /**
     * FileTemplateMessageBuilder constructor.
     *
     * @param Core  $view   Instance of smarty templater (Tygh\SmartyEngine\Core)
     * @param array $config List of base params (see AMessageBuilder::__construct)
     */
    public function __construct(Core $view, array $config, Repository $storefront_repository)
    {
        $this->view = $view;
        parent::__construct($config, $storefront_repository);
    }

    /** @inheritdoc */
    protected function initMessage(Message $message, $params, $area, $lang_code)
    {
        if (empty($params['tpl'])) {
            return;
        }

        if (!empty($params['data'])) {
            foreach ($params['data'] as $key => $value) {
                $this->view->assign($key, $value);
            }
        }

        $company_id = $params['company_id'];
        $tpl_ext = (string) pathinfo($params['tpl'], PATHINFO_EXTENSION);
        $subj_tpl = str_replace('.' . $tpl_ext, '_subj.' . $tpl_ext, $params['tpl']);

        $body = $this->view->displayMail($params['tpl'], false, $area, $company_id, $lang_code);
        $subject = $this->view->displayMail($subj_tpl, false, $area, $company_id, $lang_code);

        ///////////////////////////////////////////////
        // Modified by takahashi from cs-cart.jp 2020 BOF
        // is_htmlがfalseの場合、&amp; を強制的に&に修正
        ///////////////////////////////////////////////
        if (!$message->isIsHtml()){
            $body = str_replace('&amp;', '&', $body);
        }
        ///////////////////////////////////////////////
        // Modified by takahashi from cs-cart.jp 2020 EOF
        ///////////////////////////////////////////////

        $message->setId($params['tpl']);
        $message->setBody($body);
        $message->setSubject($subject);
    }
}