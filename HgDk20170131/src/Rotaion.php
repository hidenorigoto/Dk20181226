<?php
namespace Hg\Dk20170131;

class Rotaion
{
    public function __invoke(Target $target)
    {
        $data = $target->getValues();
        $a = array_shift($data);
        $data[] = $a;
        $target->setValues($data);
    }
}
