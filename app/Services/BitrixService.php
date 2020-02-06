<?php


namespace App\Services;


class BitrixService
{

    // Сюда добавляются ID ответственных через запятую. Должен быть как минимум 1 ID
    private $arr_responsible_id = [1447]; //Мурыга Милана

    public function __construct()
    {
    }

    public function sendFeedbackForm($data)
    {
        if (empty($data['phone'])) {
            return;
        }

        $phone = $data['phone'];

        $responsible_id = 1447;
        $this->arr_responsible_id[mt_rand(0, count($this->arr_responsible_id) - 1)];

        $request = [
            'type' => "PHONE",
            'values' => [$phone],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.duplicate.findbycomm.json',
            CURLOPT_POSTFIELDS => http_build_query($request),
        ]);

        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);

        echo '<pre>';
        print_r($result);
        echo '</pre>';

        $report = 'Поиск по телефону:<br><pre>Запрос: ' . print_r($request, true) . '</pre><br><pre>Ответ: ' . print_r($result, true) . '</pre><br><br>';

        if (!empty($result['result'])) {
            if (!empty($result['result']["CONTACT"])) {
                $info = 'Добавлено дело #ID_JOB# к контакту #ID_SUSH#';
                $count = count($result['result']["CONTACT"]) - 1;
                $id = $result['result']["CONTACT"][$count];
                $type = 3;
                $crm_method = 'contact';
            } elseif (!empty($result['result']["COMPANY"])) {
                $info = 'Добавлено дело #ID_JOB# к компании #ID_SUSH#';
                $count = count($result['result']["COMPANY"]) - 1;
                $id = $result['result']["COMPANY"][$count];
                $type = 4;
                $crm_method = 'company';
            } elseif (!empty($result['result']["LEAD"])) {
                $info = 'Добавлено дело #ID_JOB# к лиду #ID_SUSH#';
                $count = count($result['result']["LEAD"]) - 1;
                $id = $result['result']["LEAD"][$count];
                $type = 1;
                $crm_method = 'lead';
            }
            // Выбираем ID ответственного за сущность (Контакт, Компания, Лид)
            $request = [
                'id' => $id,
            ];

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => "https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.{$crm_method}.get.json",
                CURLOPT_POSTFIELDS => http_build_query($request),
            ]);

            $result = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($result, 1);

            $report .= 'Поиск ответственного:<br><pre>Запрос: ' . print_r($request, true) . '</pre><br><pre>Ответ: ' . print_r($result, true) . '</pre><br><br>';

            $responsible_id = $result['result']["ASSIGNED_BY_ID"];

        } else {
            $info = 'Создан новый лид #ID_SUSH# и к нему прикреплено дело #ID_JOB#';

            // Добавление лида

            $request = [
                'fields' => [
                    "TITLE" => 'Test lid', //название формы на сайте
                    "STATUS_ID" => "NEW",
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => $responsible_id,
                    "UF_CRM_1471411617" => '3755', // источник=lada-rostov.ru
                    "SOURCE_ID" => "SELF",
                    "NAME" => $data['name'], //имя из поля
                    "PHONE" => [["VALUE" => $phone, "VALUE_TYPE" => "MOBILE"]],
                ],
                'params' => ["REGISTER_SONET_EVENT" => "Y"],
            ];

            if (!empty($_SESSION['utmcuidF2y0seW'])) {
                $session = $_SESSION['utmcuidF2y0seW'];

                foreach (['utm_campaign', 'utm_content', 'utm_medium', 'utm_source', 'utm_term'] as $label) {
                    if (isset($session[$label])) {
                        $request['fields'][strtoupper($label)] = $session[$label];
                    }
                }
            }

            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.lead.add.json',
                CURLOPT_POSTFIELDS => http_build_query($request),
            ]);

            $result = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($result, 1);

            $report .= 'Создание лида:<br><pre>Запрос: ' . print_r($request, true) . '</pre><br><pre>Ответ: ' . print_r($result, true) . '</pre><br><br>';

            $id = $result['result'];
            $type = 1;
        }

// Прикрепление дела
        $request = [
            'fields' => [
                'OWNER_ID' => $id, //ID Сущности: лид/контакт/компания
                'OWNER_TYPE_ID' => $type, //1 лид, 3 контакт, 4 компания
                'TYPE_ID' => 2,
                'COMMUNICATIONS' => [['VALUE' => $phone]],
                'SUBJECT' => 'Заявка с сайта!',
                // 'START_TIME' => date('Y-m-d H:i:s'),
                'END_TIME' => date('Y-m-d H:i:s'),
                'COMPLETED' => 'N',
                'PRIORITY' => 3,
                'RESPONSIBLE_ID' => $responsible_id, //ответственный
                'DESCRIPTION' => 'Важный звонок',
                'DESCRIPTION_TYPE' => 1,
                'DIRECTION' => 2, //Тип звонка: 0 без данных, 1 Входящее, 2 Исходящее
            ],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://team.brightpark.ru/rest/610/g1iski89ajvio040/crm.activity.add.json',
            CURLOPT_POSTFIELDS => http_build_query($request),
        ]);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);

        $report .= 'Создание активности:<br><pre>Запрос: ' . print_r($request, true) . '</pre><br><pre>Ответ: ' . print_r($result, true) . '</pre><br><br>';

        //$modx->logEvent(0, 1, $report, 'Bitrix24 заявка ' . $phone);

// ставим куку, если еще не ставили
        $key = 'cuidF2y0seW';

        if (!isset($_COOKIE[$key])) {
            global $session_cookie_domain;
            $cookieDomain = !empty($session_cookie_domain) ? $session_cookie_domain : '';
            //$secure  = $modx->getConfig('server_protocol') == 'https';

            $value = base64_encode(json_encode([
                'owner_id' => $id,   // ID Сущности: лид/контакт/компания
                'owner_type_id' => $type, // 1 лид, 3 контакт, 4 компания
                'last_visit' => time(),
            ]));

            //setcookie($key, $value, time() + 60 * 60 * 24 * 365, MODX_BASE_URL, $secure, $cookieDomain, true);
            setcookie($key, $value, time() + 60 * 60 * 24 * 365, MODX_BASE_URL, $cookieDomain, true);
        }
    }
}
