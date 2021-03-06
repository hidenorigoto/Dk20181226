<?php
namespace Hg\Dk20170131;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @var App
     */
    private $SUT;

    protected function setUp()
    {
        $this->SUT = new App();
    }

    /**
     * @test
     * @dataProvider dataForSolve
     */
    public function solve($input, $expect)
    {
        $actual = $this->SUT->solve($input);
        static::assertEquals($expect, $actual);
    }

    public function dataForSolve()
    {
        return [
            '#0'  => ["aegj", "286/435/971" ],
            '#1'  => ["a", "231/456/789" ],
            '#2'  => ["e", "183/426/759" ],
            '#3'  => ["g", "123/456/978" ],
            '#4'  => ["j", "126/459/783" ],
            '#5'  => ["bb", "123/645/789" ],
            '#6'  => ["jjj", "123/456/789" ],
            '#7'  => ["bd", "723/164/589" ],
            '#8'  => ["ah", "231/645/789" ],
            '#9'  => ["bj", "124/569/783" ],
            '#10' => ["db", "723/561/489" ],
            '#11' => ["dh", "723/615/489" ],
            '#12' => ["dl", "123/456/789" ],
            '#13' => ["hc", "123/645/897" ],
            '#14' => ["gf", "128/453/976" ],
            '#15' => ["hl", "623/745/189" ],
            '#16' => ["ja", "261/459/783" ],
            '#17' => ["ld", "123/456/789" ],
            '#18' => ["ki", "315/486/729" ],
            '#19' => ["lfa", "294/753/186" ],
            '#20' => ["kga", "531/486/972" ],
            '#21' => ["dbi", "372/561/489" ],
            '#22' => ["che", "193/625/847" ],
            '#23' => ["iea", "823/416/759" ],
            '#24' => ["gbl", "523/964/178" ],
            '#25' => ["egj", "186/425/973" ],
            '#26' => ["jcf", "127/456/839" ],
            '#27' => ["djh", "726/915/483" ],
            '#28' => ["hld", "123/645/789" ],
            '#29' => ["leeh", "453/678/129" ],
            '#30' => ["heja", "851/629/743" ],
            '#31' => ["cakh", "251/649/837" ],
            '#32' => ["bhjik", "652/489/713" ],
            '#33' => ["eabji", "483/269/751" ],
            '#34' => ["cdbch", "823/156/974" ],
            '#35' => ["ckgajc", "536/492/817" ],
            '#36' => ["ggchha", "231/564/978" ],
            '#37' => ["gfbkeg", "128/534/697" ],
            '#38' => ["agfbcbf", "239/148/765" ],
            '#39' => ["ekahijf", "123/645/789" ],
            '#40' => ["hajdjbe", "789/432/615" ],
            '#41' => ["elgililj", "976/325/814" ],
            '#42' => ["chffefif", "317/629/845" ],
            '#43' => ["ilbbihak", "462/587/319" ],
            '#44' => ["abcdefghijkl", "123/456/789" ],
            '#45' => ["hkijbglfaced", "768/125/493" ],
            '#46' => ["dfkbjiechlga", "256/387/419" ],
            '#47' => ["hgfkbidlajce", "186/745/239" ],
            '#48' => ["baciefjhgkdl", "153/482/796" ],
        ];
    }
}
