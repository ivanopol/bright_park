<?php


use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            [
                'model_id' => 1,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Гранта сделана в России и специально для России. Клиренс в 165 мм хвалят очень многие владельцы этого авто',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Обновлённая Гранта предлагается с четырьмя типами кузова: кроме традиционного седана, это лифтбек, хэтчбек и даже универсал! ',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 1,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Среди покупателей этой машины до сих пор много тех, кто и техобслуживание, и ремонт ведёт своими силами, в гараже.',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Гранта сделана в России и специально для России. Клиренс в 165 мм хвалят очень многие владельцы этого авто',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Обновлённая Гранта предлагается с четырьмя типами кузова: кроме традиционного седана, это лифтбек, хэтчбек и даже универсал! ',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Среди покупателей этой машины до сих пор много тех, кто и техобслуживание, и ремонт ведёт своими силами, в гараже.',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Гранта сделана в России и специально для России. Клиренс в 165 мм хвалят очень многие владельцы этого авто',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Обновлённая Гранта предлагается с четырьмя типами кузова: кроме традиционного седана, это лифтбек, хэтчбек и даже универсал! ',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'url' => 'https://www.kolesa.ru/article/pyat-veshhej-za-kotorye-lyubyat-i-nenavidyat-lada-granta',
                'quote' => 'Среди покупателей этой машины до сих пор много тех, кто и техобслуживание, и ремонт ведёт своими силами, в гараже.',
                'author' => 'портал <cite>КОЛЕСА.ру</cite>'
            ]
        ];

        DB::table('reviews')->insert($reviews);
    }
}
