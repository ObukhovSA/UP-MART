<?php
class Model_Portfolio extends Model

{
    public function get_data()
    {

        return array(
            array(
                'FIO' => 'Обухов Семён Александрович',
                'pol' => 'Мужской',
                'age' => '29',
                'family' => 'Не женат',
                'child' => 'Детей нет',
                'zvanie' => 'Научный технолог',
                'stepen' => 'Кандидат ССУза',
                
            ),
            array(
                'FIO' => 'Козлов Максим Андреевич',
                'pol' => 'Мужской',
                'age' => '28',
                'family' => 'Не женат',
                'child' => 'Детей нет',
                'zvanie' => 'Мальчик на побегушках',
                'stepen' => 'Бакалавр побегушества',
            ),
// todo
        );
    }
}

